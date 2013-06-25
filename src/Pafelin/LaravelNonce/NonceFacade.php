<?php
namespace Pafelin\LaravelNonce;

use Illuminate\Support\Facades\Facade;

class NonceFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Nonce'; }

}