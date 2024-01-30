<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userSerivce;
    public function __construct(UserService $userService)
    {
        $this->userSerivce = $userService;
    }
    public function obterDadosPorIds(Request $request)
    {
        $userData = $this->userSerivce->getUserData($request->id);
        return $userData;
    }
}
