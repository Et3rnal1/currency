<?php

namespace Eternal1\Currency;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/Config/currency.php", 'currency');
        $this->loadViewsFrom(__DIR__."/views", 'converter');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__."/Config/currency.php" => config_path('currency.php'),
            __DIR__.'/views' => resource_path('views/vendor/currency'),
            __DIR__.'/scripts' => public_path('vendor/converter'),
        ], 'currency');

        \Route::get(config('currency.api_uri'), "Eternal1\\Currency\\ConverterController@index");
    }
}