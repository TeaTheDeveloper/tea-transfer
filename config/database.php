<?php
declare(strict_types=1);

/**
 * Database connection.
 *
 * Configure these environment variables in your hosting environment:
 * DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD
 */
function loadEnvFile(): void
{
    static $loaded = false;
    if ($loaded) { return; }
    $loaded = true;

    $file = dirname(__DIR__) . '/.env';
    if (!is_file($file) || !is_readable($file)) { return; }

    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) { continue; }
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        if ($key !== '' && getenv($key) === false) {
            putenv($key . '=' . $value);
        }
    }
}

function db(): PDO
{
    static $pdo = null;

    loadEnvFile();

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $port = getenv('DB_PORT') ?: '3306';
    $name = getenv('DB_NAME') ?: 'tea_transfer';
    $user = getenv('DB_USER') ?: 'root';
    $password = getenv('DB_PASSWORD') ?: '';

    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $host, $port, $name);

    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $pdo;
}

$conn = db(); // Backwards-compatible variable for existing templates.
