<?php

namespace App\Providers;

use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Transactions\TransactionControllerInterface;
use App\Repositories\Transactions\TransactionRepository;
use App\Repositories\Transactions\TransactionRepositoryInterface;
use App\Services\Transactions\TransactionService;
use App\Services\Transactions\TransactionServiceInterface;
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
            TransactionControllerInterface::class,
            TransactionController::class
        );

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
