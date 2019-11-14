<?php

namespace Gabo\Saludo;

use Illuminate\Support\ServiceProvider;

class SaludoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Gabo\Saludo\SaludoController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // include __DIR__. './routes.php';
        $this->loadRoutesFrom(__DIR__.'/routes.php');

    }
}
