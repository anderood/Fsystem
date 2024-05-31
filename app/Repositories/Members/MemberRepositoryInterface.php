<?php

namespace App\Repositories\Members;

use Illuminate\Http\Request;

interface MemberRepositoryInterface
{
    public function allMembers();
    public function getMemberById($id);
    public function createMember(Array $memberData);
    public function updateMember(Request $request, int $id);
}
