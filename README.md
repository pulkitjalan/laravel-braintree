Laravel Braintree
=============

> Laravel Service Provider for Braintree

## Requirements

* Laravel >= 5.1

## Installation

Install via composer - edit your `composer.json` to require the package.

```bash
composer require pulkitjalan/laravel-braintree
```

Add the following to the `providers` array in your `config/app.php`

```php
PulkitJalan\Braintree\BraintreeServiceProvider::class
```

Next, You should configure the following options in your `services.php` file:

```php
'braintree' => [
    'environment' => env('BRAINTREE_ENV'),
    'merchant_id' => env('BRAINTREE_MERCHANT_ID'),
    'public_key' => env('BRAINTREE_PUBLIC_KEY'),
    'private_key' => env('BRAINTREE_PRIVATE_KEY'),
],
```
