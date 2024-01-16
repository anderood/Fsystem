<?php

namespace App\Http\Requests;

class UsersRequest
{
    public $ids;
    protected array $regras = [
        'ids' => 'required|array'
    ];

    protected array $mensagens = [
        'ids.required' => 'O valor é obrigatorio',
        'ids.array' => 'O Campo deve ser um array',
    ];
}
