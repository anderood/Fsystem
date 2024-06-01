<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getAll();
    public function getUserById($id);
    public function createUser($userData);
    public function updateUser($userId, $userData);
}
