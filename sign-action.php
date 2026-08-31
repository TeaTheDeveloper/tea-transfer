<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

if (!requestMethod('POST')) {
    http_response_code(405);
    exit('Method not allowed');
}

if (!Auth::verifyCsrf($_POST['csrf_token'] ?? null)) {
    http_response_code(419);
    exit('Invalid security token. Refresh and try again.');
}

$username = strtolower(trim((string) ($_POST['username'] ?? '')));
$email = strtolower(trim((string) ($_POST['email'] ?? '')));
$password = (string) ($_POST['password'] ?? '');

if (!preg_match('/^[a-z0-9_]{3,50}$/', $username)) {
    http_response_code(422);
    exit('Username must be 3-50 characters and contain only letters, numbers, and underscores.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    exit('Please enter a valid email address.');
}

if (strlen($password) < 8) {
    http_response_code(422);
    exit('Password must be at least 8 characters.');
}

$pdo = db();

$stmt = $pdo->prepare('SELECT 1 FROM users WHERE username = ? OR email = ? LIMIT 1');
$stmt->execute([$username, $email]);

if ($stmt->fetchColumn()) {
    $stmt = $pdo->prepare('SELECT 1 FROM users WHERE username = ? LIMIT 1');
    $stmt->execute([$username]);

    if ($stmt->fetchColumn()) {
        // http_response_code(409);
        exit('Username already exists. Try another.');
    }

    // http_response_code(409);
    exit('Email already exists. Mind logging in?');
}

$userId = bin2hex(random_bytes(32));
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$pdo->beginTransaction();

try {
    $stmt = $pdo->prepare(
        'INSERT INTO users (username, user_id, email, password, balance)
         VALUES (?, ?, ?, ?, ?)'
    );
    $stmt->execute([$username, $userId, $email, $passwordHash, 1000.00]);

    $stmt = $pdo->prepare(
        'INSERT INTO transactions
         (sender_email, recipient_email, sender_username, recipient_username,
          description, status, amount)
         VALUES (?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->execute([
        'system',
        $email,
        'Tea Transfer',
        $username,
        '1000.00 (USD)',
        1,
        1000.00,
    ]);

    $pdo->commit();
} catch (Throwable $e) {
    $pdo->rollBack();
    error_log('Registration failed: ' . $e->getMessage());
    http_response_code(500);
    exit('Unable to create your account right now.');
}

Auth::login([
    'user_id' => $userId,
    'username' => $username,
    'email' => $email,
]);

echo 'Done';
