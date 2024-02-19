<?php

namespace App\Providers;

use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserControllerInterface;
use App\Repositories\Adapters\Eloquent\UserRepositoryAdapter;
use App\Repositories\Adapters\Eloquent\UserRepositoryAdapterInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
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

        $this->app->bind(
            UserServiceInterface::class,
            UserService::class
        );

        $this->app->bind(
            UserRepositoryAdapterInterface::class,
            UserRepositoryAdapter::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
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
