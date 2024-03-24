<?php

namespace App\Repositories;

use App\Http\Requests\UsersRequest;
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
        $validator = UsersRequest::validate($userData);

        // Verifique se a validação falhou
        if ($validator->fails()) {
            // Se a validação falhar, lance uma exceção com os erros
            throw new \InvalidArgumentException($validator->errors()->first());
        }

        $user = User::create($userData);

        return $user;
    }
}
