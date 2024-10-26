<?php

namespace App\Services\Member;

use Illuminate\Http\Request;

interface MemberServiceInterface
{
    public function allMembers();

    public function getMemberById(int $id);

    public function createMember(Request $request);

    public function updateMember(Request $request, int $id);

    public function deleteMember(int $id);

    public function softDeleteMember(int $id);
}
