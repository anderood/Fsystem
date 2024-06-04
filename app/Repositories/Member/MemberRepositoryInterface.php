<?php

namespace App\Repositories\Member;

use Illuminate\Http\Request;

interface MemberRepositoryInterface
{
    public function allMembers();
    public function getMemberById(int $id);
    public function createMember(Request $request);
    public function deleteMember(int $id);
}
