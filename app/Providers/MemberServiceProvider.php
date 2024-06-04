<?php

namespace App\Providers;

use App\Repositories\Member\MemberRepository;
use App\Repositories\Member\MemberRepositoryInterface;
use App\Services\Member\MemberService;
use App\Services\Member\MemberServiceInterface;
use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MemberServiceInterface::class,
            MemberService::class
        );

        $this->app->bind(
            MemberRepositoryInterface::class,
            MemberRepository::class
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
