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
            'dateOfBirth' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ];

        return Validator::make($userData, $regras);
    }



}
