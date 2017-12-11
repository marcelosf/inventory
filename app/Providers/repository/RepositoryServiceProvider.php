<?php

namespace Inventory\Providers\repository;

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
        $this->app->bind(\Inventory\repository\Repositories\UserRepository::class, \Inventory\repository\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
