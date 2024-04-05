<?php

namespace App\Http\Requests\Members;

use Illuminate\Support\Facades\Validator;

class CreateMemberRequest
{
    public static function validate(array $memberData)
    {
        $regras = [
            'first_name'  => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'phone'  => 'required|string|max:255',
            'dateOfBirth'  => 'required|string|max:255',

            'zipcode'  => 'required|string|max:255',
        ];

        return Validator::make($memberData, $regras);

    }
}
