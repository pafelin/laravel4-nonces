<?php
namespace Pafelin\LaravelNonce;

use Illuminate\Support\ServiceProvider;

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
        $this->package('Pafelin/LaravelNonce');
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
            return new Nonce(Config::get('LaravelNonce::length'), Config::get('LaravelNonce::nonceLife'));
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