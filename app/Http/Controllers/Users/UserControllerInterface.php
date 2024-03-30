<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

interface UserControllerInterface
{
    public function index();

    public function show();
    public function createUser(Request $request);
}
