<?php

namespace App\Services\User;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function allUsers();

    public function getUserById(int $id);

    public function createUser(Request $request);

    public function updateUser(Request $request, int $id);

    public function deleteUser(int $id);
}
