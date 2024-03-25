<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class CreateUsersRequest
{
    public static function validate(array $userData)
    {
        $regras = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'dateOfBird' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'zipcode' => 'required|string|min:9|max:9',
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ];

        return Validator::make($userData, $regras);
    }



}
