<?php

namespace App\Services;

interface UserServiceInterface
{
    public function getAllUsers();
    public function getUserById($id);
}
