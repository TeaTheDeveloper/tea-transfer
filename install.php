<?php
declare(strict_types=1);

/**
 * Tea Transfer - one-click database installer.
 *
 * Visit /install.php, enter MySQL credentials, and the installer will:
 * 1. create the tea_transfer database;
 * 2. create all required tables/indexes;
 * 3. write a local .env file;
 * 4. lock itself after a successful installation.
 */

$lockFile = __DIR__ . '/storage/installed.lock';
$envFile = __DIR__ . '/.env';
$schemaFile = __DIR__ . '/database/schema.sql';

if (is_file($lockFile)) {
    http_response_code(403);
    exit('Tea Transfer is already installed. Delete storage/installed.lock only if you intentionally want to reinstall.');
}

function h(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function post(string $key, string $default = ''): string { return trim((string) ($_POST[$key] ?? $default)); }

$values = [
    'host' => post('host', '127.0.0.1'),
    'port' => post('port', '3306'),
    'name' => post('name', 'tea_transfer'),
    'user' => post('user', 'root'),
    'password' => (string) ($_POST['password'] ?? ''),
];

$error = null;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $values['name'])) {
        $error = 'Database name may contain only letters, numbers, and underscores.';
    } elseif (!ctype_digit($values['port']) || (int) $values['port'] < 1 || (int) $values['port'] > 65535) {
        $error = 'Invalid MySQL port.';
    } elseif (!is_file($schemaFile)) {
        $error = 'database/schema.sql is missing from this installation.';
    } else {
        try {
            $serverDsn = sprintf('mysql:host=%s;port=%s;charset=utf8mb4', $values['host'], $values['port']);
            $pdo = new PDO($serverDsn, $values['user'], $values['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);

            $dbName = $values['name'];
            $pdo->exec(sprintf(
                'CREATE DATABASE IF NOT EXISTS `%s` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci',
                str_replace('`', '``', $dbName)
            ));
            $pdo->exec(sprintf('USE `%s`', str_replace('`', '``', $dbName)));

            // The schema file is also usable manually in phpMyAdmin/MySQL CLI.
            // Strip CREATE DATABASE / USE because the installer has already selected the database.
            $schema = file_get_contents($schemaFile);
            if ($schema === false) {
                throw new RuntimeException('Unable to read database/schema.sql.');
            }
            $schema = preg_replace('/^\s*CREATE DATABASE IF NOT EXISTS.*?;\s*/ims', '', $schema, 1) ?? $schema;
            $schema = preg_replace('/^\s*USE\s+`?[^;]+`?\s*;\s*/im', '', $schema, 1) ?? $schema;

            foreach (preg_split('/;\s*(?:\r?\n|$)/', $schema) as $statement) {
                $statement = trim($statement);
                if ($statement !== '') {
                    $pdo->exec($statement);
                }
            }

            if (!is_dir(dirname($lockFile))) {
                mkdir(dirname($lockFile), 0755, true);
            }

            $env = "# Tea Transfer local environment\n"
                . "APP_ENV=production\n"
                . "DB_HOST=" . $values['host'] . "\n"
                . "DB_PORT=" . $values['port'] . "\n"
                . "DB_NAME=" . $values['name'] . "\n"
                . "DB_USER=" . $values['user'] . "\n"
                . "DB_PASSWORD=" . str_replace(["\\", "\n", "\r"], ['\\\\', '', ''], $values['password']) . "\n";

            if (file_put_contents($envFile, $env, LOCK_EX) === false) {
                throw new RuntimeException('Database installed, but .env could not be written. Check file permissions.');
            }
            @chmod($envFile, 0600);

            if (file_put_contents($lockFile, 'Installed: ' . date(DATE_ATOM) . PHP_EOL, LOCK_EX) === false) {
                throw new RuntimeException('Database installed, but the installer lock could not be written.');
            }
            @chmod($lockFile, 0600);

            $success = true;
        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tea Transfer — Installation</title>
<style>
body{margin:0;background:#f5f7fb;color:#222;font-family:Arial,sans-serif}.wrap{max-width:560px;margin:7vh auto;padding:20px}.card{background:#fff;border-radius:14px;padding:32px;box-shadow:0 10px 35px rgba(0,0,0,.08)}h1{margin-top:0}.muted{color:#667085}.row{margin:16px 0}label{display:block;font-weight:600;margin-bottom:7px}input{width:100%;box-sizing:border-box;padding:12px;border:1px solid #d0d5dd;border-radius:8px;font-size:15px}button{width:100%;padding:13px;border:0;border-radius:8px;background:#1769ff;color:white;font-size:16px;font-weight:700;cursor:pointer}.error{padding:12px;border-radius:8px;background:#fff1f0;color:#b42318;margin-bottom:18px}.success{padding:16px;border-radius:8px;background:#ecfdf3;color:#027a48}.success a{display:inline-block;margin-top:12px;font-weight:700;color:inherit}.hint{font-size:13px;color:#667085;margin-top:5px}
</style>
</head>
<body>
<div class="wrap"><div class="card">
<h1>Tea Transfer Installation</h1>
<?php if ($success): ?>
<div class="success"><strong>Installation complete.</strong><br>Database, tables, indexes, and application configuration were created successfully.<br><a href="login">Go to Tea Transfer →</a></div>
<p class="hint">For security, the installer is now locked.</p>
<?php else: ?>
<p class="muted">Enter your MySQL details once. The installer will create the <code>tea_transfer</code> database and all required tables automatically.</p>
<?php if ($error): ?><div class="error"><?= h($error) ?></div><?php endif; ?>
<form method="post" autocomplete="off">
<div class="row"><label>MySQL Host</label><input name="host" value="<?= h($values['host']) ?>" required></div>
<div class="row"><label>MySQL Port</label><input name="port" value="<?= h($values['port']) ?>" required inputmode="numeric"></div>
<div class="row"><label>Database Name</label><input name="name" value="<?= h($values['name']) ?>" required></div>
<div class="row"><label>MySQL Username</label><input name="user" value="<?= h($values['user']) ?>" required></div>
<div class="row"><label>MySQL Password</label><input type="password" name="password" value="<?= h($values['password']) ?>"></div>
<button type="submit">Install Tea Transfer</button>
</form>
<p class="hint">Make sure PHP has PDO MySQL enabled and the MySQL user can create databases/tables.</p>
<?php endif; ?>
</div></div>
</body>
</html>
