<?php

namespace App\Repositories;

use App\Http\Requests\CreateUsersRequest;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;

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
        $validator = CreateUsersRequest::validate($userData);

        if ($validator->fails()) {
            throw new \InvalidArgumentException($validator->errors()->first());
        }

        $user = User::create([
            'name' => $userData['name'],
            'phone' => $userData['phone'],
            'dateOfBirth' => $userData['dateOfBirth'],
            'observations' => $userData['observations'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
        ]);

        return User::find($user->id);
    }
}
