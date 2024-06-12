<?php

namespace App\Providers;

use App\Repositories\Transaction\TransactionRepository;
use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use App\Services\Transaction\TransactionServiceInterface;
use Illuminate\Support\ServiceProvider;

class TransactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TransactionServiceInterface::class,
            TransactionService::class
        );

        $this->app->bind(
            TransactionRepositoryInterface::class,
            TransactionRepository::class
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
