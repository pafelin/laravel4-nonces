<?php

namespace Pafelin\LaravelNonce;

class Nonce {

    protected $length;

    protected $nonceLife;

    public function __construct($length = 16, $nonceLife = 60){
        $this->length = (int) $length;
        $this->nonceLife = (int) $nonceLife;
    }

    public function generate($username) {
        return substr($this->hash($this->tick() . $username), 0, $this->length);
    }

    protected function tick() {
        return ceil(time() / $this->nonceLife );
    }

    protected function hash($data){
        return hash_hmac('md5', $data, 'nonce');
    }
}