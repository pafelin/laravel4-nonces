<?php

namespace Pafelin\LaravelNonce;

class Nonce {

    protected $length = 16;

    protected $nonceLife = 60;

    public function __construct($length, $nonceLife){
        $this->length = (int) $length;
        $this->nonceLife = (int) $nonceLife;
    }

    public function generate($username) {
        return substr($this->hash($this->tick() . $username), -12, $this->length);
    }

    protected function tick() {
        return ceil(time() / ( $this->nonceLife / 2 ));
    }

    protected function hash($data){
        return hash_hmac('md5', $data, 'nonce');
    }
}