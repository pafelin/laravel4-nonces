<?php

namespace Pafelin\LaravelNonce;

class Nonce {

    protected $lenght = 10;

    protected $nonce_life = 3600; //1 hour

    public function __construct(){
        //get the current user's username
    }

    public function generate($username) {
        return substr($this->hash($this->tick() . $username), -12, $this->lenght);
    }

    protected function tick() {
        return ceil(time() / ( $this->nonce_life / 2 ));
    }

    protected function hash($data){
        return hash_hmac('md5', $data, 'nonce');
    }
}