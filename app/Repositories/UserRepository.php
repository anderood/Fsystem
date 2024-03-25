<?php

namespace App\Repositories;

use App\Http\Requests\CreateUsersRequest;
use App\Models\User;
use App\Models\Address;
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

        $user = User::create($userData);

        $address = Address::create([
            'zipcode' => $userData['zipcode'],
            'street' => $userData['street'],
            'number' => $userData['number'],
            'complement' => $userData['complement'],
            'district' => $userData['district'],
            'city' => $userData['city'],
            'state' => $userData['state'],
            'user_id' => $user->id
        ]);

        return User::find($user->id);
    }
}
