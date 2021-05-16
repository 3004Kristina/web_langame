<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

$code = $_POST['code'] ?? null;
$error = null;

if (\strpos($code, "1") !== 0) {
    $error = 'Код подтверждения неправильный';
}

echo \json_encode([
    'data' => $error ? 'Error' : 'Success',
    'error' => $error,
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
