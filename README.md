# Simple Text Encryption/Decryption Script

Just a simple script to encrypt/decrypt text.

## Requirements
- PHP >= 7.1
- Composer >= 1.7.2

## Installation
- Clone this repo.
- Run `composer install`.
- Copy `config/config.php.dist` to `config/config.php` and update the values accordingly.

## Encryption
- Run `php encrypt.php [filename]` to encrypt the contents of `filename`
  (defaults to `data/plaintext.txt` if not specified).
- Note that the contents will be trimmed before encryption.
- Output will be printed in the terminal.
- `.txt` files are ignored and will not be committed in this repo, including the `data` folder.

## Decryption
- Run `php decrypt.php [filename]` to decrypt the contents of `filename`
  (defaults to `data/ciphertext.txt` if not specified).
- Note that the contents will be trimmed before decryption.
- Output will be printed in the terminal.
- `.txt` files are ignored and will not be committed in this repo, including the `data` folder.
