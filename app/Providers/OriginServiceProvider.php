<?php

namespace App\Providers;

use App\Repositories\Origin\OriginRepository;
use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use App\Services\Origin\OriginServiceInterface;
use Illuminate\Support\ServiceProvider;

class OriginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
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
