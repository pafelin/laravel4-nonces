<?php
namespace Pafelin\LaravelNonce;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class NonceServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('pafelin/laravel-nonce');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['nonce'] = $this->app->share(function($app)
        {
            return new Nonce($app['config']['laravel-nonce::length'], $app['config']['laravel-nonce::nonceLife']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('nonce');
    }

}