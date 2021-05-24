<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

$data = null;
$error = null;

if (isset($_FILES['file'])) {
    $fileName = \md5(\microtime());
    $filePath = "/upload/{$fileName[0]}/{$fileName[1]}{$fileName[2]}/{$fileName}." . \pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $fullPath = __DIR__ . $filePath;

    @\mkdir(\dirname($fullPath), 02775, true);

    \move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . $filePath);

    $data = $filePath;
} else {
    $error = 'Необходимо загрузить файл';
}

echo \json_encode([
    'error' => $error,
    'data' => $data,
]);