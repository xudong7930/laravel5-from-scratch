<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        var_dump('FooServiceProvider: boot');
        DB::listen(function($query){
            var_dump($query->sql, $query->bindings);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        var_dump('FooServiceProvider: register');
    }
}
