<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class UsersRequest
{
    public static function validate(array $userData)
    {
        $regras = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'dateOfBird' => 'required|date',
            'observations' => 'nullable|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];

        return Validator::make($userData, $regras);
    }



}
