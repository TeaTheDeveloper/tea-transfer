<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/bootstrap.php';

function checkExistsUsername(string $username): bool
{
    $stmt = db()->prepare('SELECT 1 FROM users WHERE username = ? LIMIT 1');
    $stmt->execute([strtolower(trim($username))]);
    return (bool) $stmt->fetchColumn();
}

function checkExistsEmail(string $email): bool
{
    $stmt = db()->prepare('SELECT 1 FROM users WHERE email = ? LIMIT 1');
    $stmt->execute([strtolower(trim($email))]);
    return (bool) $stmt->fetchColumn();
}
