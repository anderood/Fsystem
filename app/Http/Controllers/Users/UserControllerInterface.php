<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\UsersRequest;

interface UserControllerInterface
{
    public function obterDadosPorIds(UsersRequest $request);
}
