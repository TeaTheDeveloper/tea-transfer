<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

if (!requestMethod('POST')) {
    jsonResponse(['ok' => false, 'message' => 'Method not allowed'], 405);
}

Auth::requireLogin();

if (!Auth::verifyCsrf($_POST['csrf_token'] ?? null)) {
    jsonResponse(['ok' => false, 'message' => 'Invalid security token. Refresh and try again.'], 419);
}

try {
    $service = new TransactionService(db());

    $transactionId = $service->transfer(
        Auth::userId(),
        (string) ($_POST['email'] ?? ''),
        (float) ($_POST['total_usd'] ?? 0),
        (float) ($_POST['recipient_amount'] ?? 0),
        (string) ($_POST['recipient_currency'] ?? '')
    );

    $_SESSION['last_transfer'] = [
        'id' => $transactionId,
        'amount_usd' => (float) $_POST['total_usd'],
        'recipient_email' => strtolower(trim((string) $_POST['email'])),
    ];

    jsonResponse(['ok' => true, 'message' => 'Transfer completed.']);
} catch (InvalidArgumentException $e) {
    jsonResponse(['ok' => false, 'message' => $e->getMessage()], 422);
} catch (Throwable $e) {
    error_log('Transfer failed: ' . $e->getMessage());
    jsonResponse(['ok' => false, 'message' => 'Unable to complete the transfer right now.'], 500);
}
