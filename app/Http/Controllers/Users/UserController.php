<?php

namespace App\Http\Controllers\Users;

use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class UserController implements UserControllerInterface
{
    protected UserServiceInterface $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $cadastros = $this->userService->getAllUsers();
        return view("admin.cadastros_admin", ['cadastros' => $cadastros]);
    }

    public function show($id)
    {
        return $this->userService->getUserById($id);
    }

    public function createUser(Request $request)
    {
        $userData = $request->all();
        return $this->userService->createUser($userData);
    }
}
