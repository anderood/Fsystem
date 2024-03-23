<?php

namespace App\Repositories;

use App\Models\User;
class UserRepository implements UserRepositoryInterface
{

    public function getAll()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function createUser($userData)
    {
        $user = new User();
        $user->name = $userData['name'];
        $user->phone = $userData['phone'];
        $user->dateOfBird = $userData['dateOfBird'];
        $user->observations = $userData['observations'];
        $user->email = $userData['email'];
        $user->password = $userData['password'];
        $user->save();
    }
}
