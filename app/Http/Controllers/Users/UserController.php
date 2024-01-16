<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;

class UserController implements UserControllerInterface
{
    //
    private UserControllerInterface $userServico;

    public function __construct(UserControllerInterface $userServico)
    {
        $this->userServico = $userServico;
    }
    public function obterDadosPorIds(UsersRequest $request): UserControllerInterface
    {
        // TODO: Implement obterDadosPorIds() method.
        $ids = $request->ids;

        return $this->userServico;
    }
}
