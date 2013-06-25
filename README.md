laravel4-nonces
===============

This package is for creating nonces easily based on a unique string (action)

## Usage
Add to
    /app/config/app.php

    'providers' => array(
        ....
        'Pafelin\LaravelNonce\NonceServiceProvider',
        ....
    )
and to
    'aliases' => array(
        ....
        'Nonce' => 'Pafelin\LaravelNonce\NonceFacade',
    );

When you want to generate a nonce
    $nonce = Nonce::generate('some_identification_string');

## Contact
* [Pavel Genov](mailto:pavel@taskprocess.com)
