<?php

namespace App\Providers;

use App\Http\Controllers\Types\TypeController;
use App\Http\Controllers\Types\TypeControllerInterface;
use App\Repositories\Types\TypeRepository;
use App\Repositories\Types\TypeRepositoryInterface;
use App\Services\Types\TypeService;
use App\Services\Types\TypeServiceInterface;
use Illuminate\Support\ServiceProvider;

class TypeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TypeControllerInterface::class,
            TypeController::class
        );

        $this->app->bind(
            TypeServiceInterface::class,
            TypeService::class
        );

        $this->app->bind(
            TypeRepositoryInterface::class,
            TypeRepository::class
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
