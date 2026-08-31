<?php
declare(strict_types=1);

require_once __DIR__ . '/Support/helpers.php';
require_once __DIR__ . '/Support/Auth.php';
require_once __DIR__ . '/Services/TransactionService.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

require_once __DIR__ . '/../config/database.php';
