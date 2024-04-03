<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;

interface MemberControllerInterface
{
    public function index();
    public function getMemberById($id);
    public function create(Request $request);
}
