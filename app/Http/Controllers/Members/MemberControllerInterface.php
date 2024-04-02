<?php

namespace App\Http\Controllers\Members;

interface MemberControllerInterface
{
    public function index();

    public function getMemberById($id);
}
