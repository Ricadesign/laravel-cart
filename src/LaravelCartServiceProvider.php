<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Support\ServiceProvider;

class LaravelCartServiceProvider extends ServiceProvider 
{
     /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        
        if(config('shopping_cart.storage') == DBStorage::class){
            $this->loadMigrationsFrom(__DIR__ . '/migrations');
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(CartController::class);
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cart');

        if(config('shopping_cart.storage') == DBStorage::class){
            $this->app->make(DBStorage::class);
        }
    }
}

