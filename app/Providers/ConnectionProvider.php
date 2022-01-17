<?php

namespace App\Providers;

use App\Design\Factories\ConnectionFactory;
use App\Design\Interfaces\ConnectionFactoryInterface;
use Illuminate\Support\ServiceProvider;

class ConnectionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ConnectionFactoryInterface::class, ConnectionFactory::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
