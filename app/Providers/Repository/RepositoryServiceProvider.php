<?php

namespace Inventory\Providers\Repository;

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
        $this->app->bind(\Inventory\Repository\Repositories\UserRepository::class, \Inventory\Repository\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
