<?php

namespace App\Repositories\Adapters\Eloquent;

use App\Models\User;

class UserRepositoryAdapter implements UserRepositoryAdapterInterface
{

    public function getAll()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }
}
