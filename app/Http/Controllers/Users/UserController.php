<?php

namespace App\Http\Controllers\Users;

use App\Services\UserServiceInterface;

class UserController implements UserControllerInterface
{
    protected UserServiceInterface $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->getAllUsers();
    }

    public function show($id)
    {
        return $this->userService->getUserById($id);
    }
}
