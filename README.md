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

By default the lifetime of the nonce is 1 minute and the size 16 characters.
You can change the configurations by first publishing the package with the command:

    php artisan config:publish pafelin/laravel-nonce

This command will create a new file in

    app/config/packages/pafelin/laravel-nonce/config.php

The file will look like this:

    <?php
    return array(
        'nonceLife' => 60, //1 minute
        'length'    => 16
    );

There are only two configurations. The first increase or decrease the life of the nonce and the second increase or decrease the size (length) of it.
The values there are recommended.


## Contact
* [Pavel Genov](mailto:pavel@taskprocess.com)
