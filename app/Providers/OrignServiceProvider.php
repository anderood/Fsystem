<?php

namespace App\Providers;

use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Origins\OriginControllerInterface;
use App\Repositories\Origins\OriginRepository;
use App\Repositories\Origins\OriginRepositoryInterface;
use App\Services\Origins\OriginService;
use App\Services\Origins\OriginServiceInterface;
use Illuminate\Support\ServiceProvider;

class OrignServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            OriginControllerInterface::class,
            OriginController::class
        );

        $this->app->bind(
            OriginServiceInterface::class,
            OriginService::class
        );

        $this->app->bind(
            OriginRepositoryInterface::class,
            OriginRepository::class
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
