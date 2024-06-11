<?php

namespace App\Providers;

use App\Repositories\Movement\MovementRepository;
use App\Repositories\Movement\MovementRepositoryInterface;
use App\Services\Movement\MovementService;
use App\Services\Movement\MovementServiceInterface;
use Illuminate\Support\ServiceProvider;

class MovementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MovementServiceInterface::class,
            MovementService::class
        );

        $this->app->bind(
            MovementRepositoryInterface::class,
            MovementRepository::class
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
