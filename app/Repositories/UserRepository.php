<?php

namespace App\Repositories;

use App\Http\Requests\Users\CreateUsersRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserRepository implements UserRepositoryInterface
{

    public function getAll()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function createUser($userData)
    {
        $validator = CreateUsersRequest::validate($userData);

        if ($validator->fails()) {
            throw new ValidationException($validator);
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

    public function updateUser($userId, $userData)
    {
        $user = User::findOrFail($userId);

        $user->fill($userData);

        $user->save();

        return redirect()->route('admin.update', ['id' => $userId])->with('success', 'Os dados do Usuario foram atualizados com sucesso!');
    }
}
