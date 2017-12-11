<?php

namespace Inventory\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Inventory\Repositories\UserRepository::class, \Inventory\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
