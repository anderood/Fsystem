<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{

    public function allUsers()
    {
        return User::all();
    }

    public function getUserById(int $id)
    {
        return User::find($id);
    }

    public function createUser(Request $request)
    {
        return User::create($request->all());
    }

    public function updateUser(Request $request, int $id)
    {
        $user = User::find($id);
        $userUpdate = $request->all();
        $user->fill($userUpdate);
        $user->save();

        return $user;
    }

    public function deleteUser(int $id)
    {
        return User::destroy($id);
    }
}
