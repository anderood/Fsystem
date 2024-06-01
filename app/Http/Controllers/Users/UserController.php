<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
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
        $users = $this->userService->getAllUsers();
        return view("admin.home_admin", ['users' => $users]);
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById($id);
        return view('admin.edit_admin', ['user' => $user]);
    }

    public function show()
    {
        return view('admin.create_admin');
    }

    public function createUser(Request $request)
    {
        $userData = $request->all();
        return $this->userService->createUser($userData);
    }

    public function update($id, Request $request)
    {
        $userData = $request->all();
        return $this->userService->updateUser($id, $userData);
    }
}
