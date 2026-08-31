<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

if (!requestMethod('POST')) {
    http_response_code(405);
    exit('Method not allowed');
}

if (!Auth::verifyCsrf($_POST['csrf_token'] ?? null)) {
    // http_response_code(419);
    exit('Invalid security token. Refresh and try again.');
}

$email = strtolower(trim((string) ($_POST['email'] ?? '')));
$password = (string) ($_POST['password'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
    // http_response_code(422);
    exit('Please enter a valid email and password');
}

$stmt = db()->prepare(
    'SELECT user_id, username, email, password FROM users WHERE email = ? LIMIT 1'
);
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password'])) {
    // http_response_code(401);
    exit('Incorrect email or password');
}

if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
    $newHash = password_hash($password, PASSWORD_DEFAULT);
    $update = db()->prepare('UPDATE users SET password = ? WHERE user_id = ?');
    $update->execute([$newHash, $user['user_id']]);
}

Auth::login($user);
echo 'Authorized';
