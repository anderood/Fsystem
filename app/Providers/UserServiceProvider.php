<?php

namespace App\Providers;

use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserControllerInterface;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserControllerInterface::class,
            UserController::class
        );
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
