<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

if (!requestMethod('GET')) {
    jsonResponse(['error' => 'Method not allowed'], 405);
}

$base = strtoupper(trim($_GET['base'] ?? 'USD'));

if (!preg_match('/^[A-Z]{3}$/', $base)) {
    jsonResponse(['error' => 'Invalid base currency'], 400);
}

$url = 'https://open.er-api.com/v6/latest/' . rawurlencode($base);

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTPHEADER => ['Accept: application/json'],
]);
$body = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($body === false || $status < 200 || $status >= 300) {
    error_log('Exchange-rate provider error: ' . $error);
    jsonResponse(['error' => 'Exchange-rate service unavailable'], 502);
}

$data = json_decode($body, true);

if (!is_array($data) || ($data['result'] ?? '') !== 'success' || !isset($data['rates'])) {
    jsonResponse(['error' => 'Invalid exchange-rate response'], 502);
}

header('Cache-Control: public, max-age=300, stale-while-revalidate=60');
jsonResponse([
    'base_code' => $data['base_code'] ?? $base,
    'conversion_rates' => $data['rates'],
]);
