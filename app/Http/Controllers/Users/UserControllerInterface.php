<?php

namespace App\Http\Controllers\Users;

interface UserControllerInterface
{
    public function index();

    public function show($id);
}
