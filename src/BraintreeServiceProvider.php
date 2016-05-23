<?php

namespace PulkitJalan\Braintree;

use Braintree_Configuration;
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
        Braintree_Configuration::environment($this->app['config']->get('service.braintree.environment'));
        Braintree_Configuration::merchantId($this->app['config']->get('service.braintree.merchant_id'));
        Braintree_Configuration::publicKey($this->app['config']->get('service.braintree.public_key'));
        Braintree_Configuration::privateKey($this->app['config']->get('service.braintree.private_key'));
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
