<?php

namespace App\Services\Members;

use Illuminate\Http\Request;

interface MemberServiceInterface
{
    public function getAllMembers();
    public function getMemberById($id);
    public function createMember(Array $memberData);
    public function updateMember(Request $request, int $id);
}
