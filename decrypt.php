<?php
include __DIR__ . '/vendor/autoload.php';

$config = include __DIR__ . '/config/config.php' ?? [];
$app = new \App\Application($config);

$filename = $argv[1] ?? 'data/ciphertext.txt';
$ciphertext = trim(@file_get_contents($filename) ?? '');

echo "Reading ciphertext from file \"{$filename}\" (can be specified via commandline argument).\n\n";
if (! $ciphertext) {
    echo "No ciphertext to decrypt!\n\n";
    exit;
}

echo "Ciphertext (trimmed):\n";
echo $ciphertext, "\n\n";

$result = $app->decrypt(trim($ciphertext));
if (false === $result) {
    echo "Unable to decrypt ciphertext with given key\n\n";
} else {
    echo "Decrypted plaintext:\n", $result, "\n\n";
}
