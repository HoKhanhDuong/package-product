<?php

namespace Duong\Product;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {

    public function register()
    {
        
    }

    public function boot() {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views", "product");

        $this->publishes([
            __DIR__."/public/" => public_path("product"),
        ], "product_public");

        $this->loadMigrationsFrom(__DIR__."/database/migrations");
    }
}