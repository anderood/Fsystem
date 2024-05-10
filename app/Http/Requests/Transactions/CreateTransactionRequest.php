<?php

namespace App\Http\Requests\Transactions;


use Illuminate\Support\Facades\Validator;

class CreateTransactionRequest
{


    public static function validate (array $transactionData)
    {
        $regras = [
            'title' => 'required|max:255',
            'amount' => 'required|max:255',
            'date' => 'required',
            'origin_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
        ];

        return Validator::make($transactionData, $regras);
    }
}
