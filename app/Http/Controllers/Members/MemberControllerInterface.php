<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;

interface MemberControllerInterface
{
    public function index();
    public function show();
    public function edit(int $id);
    public function createMember(Request $request);
    public function update(Request $request, int $id);
}
