<?php
namespace App;

use Zend\Crypt\BlockCipher;

class Application
{
    protected $config = ['key' => ''];
    protected $blockCipher = null;

    public function __construct(array $config = [])
    {
        $this->config = array_merge($this->config, $config);
        $key = $config['key'] ?? '';
        $this->blockCipher = BlockCipher::factory('openssl', array('algo' => 'aes'));
        $this->blockCipher->setKey($key);
    }

    public function encrypt($plaintext)
    {
        return $this->blockCipher->encrypt($plaintext);
    }

    public function decrypt($ciphertext)
    {
        return $this->blockCipher->decrypt($ciphertext);
    }
}
