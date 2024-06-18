<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function allUsers();

    public function getUserById(int $id);

    public function createUser(Request $request);

    public function updateUser(Request $request, int $id);

    public function deleteUser(int $id);
}
