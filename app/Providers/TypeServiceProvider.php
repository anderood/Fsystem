<?php

namespace App\Providers;

use App\Repositories\Type\TypeRepository;
use App\Repositories\Type\TypeRepositoryInterface;
use App\Services\Type\TypeService;
use App\Services\Type\TypeServiceInterface;
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
