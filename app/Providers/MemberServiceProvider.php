<?php

namespace App\Providers;

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Members\MemberControllerInterface;
use App\Repositories\Members\MemberRepository;
use App\Repositories\Members\MemberRepositoryInterface;
use App\Services\Members\MemberService;
use App\Services\Members\MemberServiceInterface;
use Carbon\Laravel\ServiceProvider;

class MemberServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            MemberControllerInterface::class,
            MemberController::class
        );

        $this->app->bind(
            MemberServiceInterface::class,
            MemberService::class
        );

        $this->app->bind(
            MemberRepositoryInterface::class,
            MemberRepository::class
        );
    }

    public function boot()
    {

    }
}
