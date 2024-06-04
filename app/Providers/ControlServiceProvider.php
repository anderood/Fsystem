<?php

namespace App\Providers;

use App\Http\Controllers\Controls\ControlController;
use App\Http\Controllers\Controls\ControlControllerInterface;
use App\Repositories\Controls\ControlRepository;
use App\Repositories\Controls\ControlRepositoryInterface;
use App\Services\Controls\ControlService;
use App\Services\Controls\ControlServiceInterface;
use Illuminate\Support\ServiceProvider;

class ControlServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ControlControllerInterface::class,
            ControlController::class
        );

        $this->app->bind(
            ControlServiceInterface::class,
            ControlService::class
        );

        $this->app->bind(
            ControlRepositoryInterface::class,
            ControlRepository::class
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
