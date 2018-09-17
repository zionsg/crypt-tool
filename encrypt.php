<?php
include __DIR__ . '/vendor/autoload.php';

$config = include __DIR__ . '/config/config.php' ?? [];
$app = new \App\Application($config);

$filename = $argv[1] ?? 'data/plaintext.txt';
$plaintext = trim(@file_get_contents($filename) ?? '');

echo "Reading plaintext from file \"{$filename}\" (can be specified via commandline argument).\n\n";
if (! $plaintext) {
    echo "No plaintext to encrypt!\n\n";
    exit;
}

echo "Plaintext (trimmed):\n";
echo $plaintext, "\n\n";

echo "Encrypted ciphertext:\n";
echo $app->encrypt(trim($plaintext)), "\n\n";
