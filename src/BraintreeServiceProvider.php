<?php

namespace PulkitJalan\Braintree;

use Braintree\Configuration;
use Illuminate\Support\ServiceProvider;

class BraintreeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        Configuration::environment($this->app['config']->get('services.braintree.environment'));
        Configuration::merchantId($this->app['config']->get('services.braintree.merchant_id'));
        Configuration::publicKey($this->app['config']->get('services.braintree.public_key'));
        Configuration::privateKey($this->app['config']->get('services.braintree.private_key'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
