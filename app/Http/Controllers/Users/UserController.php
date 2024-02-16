<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserServiceInterface $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function obterDadosBasicosPorIds(Request $request)
    {
        $ids = $request->ids;
        return $this->userService->obterDadosBasicosPorIds($ids);
    }
}
