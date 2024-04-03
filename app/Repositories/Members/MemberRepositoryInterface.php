<?php

namespace App\Repositories\Members;

interface MemberRepositoryInterface
{
    public function allMembers();
    public function getMemberById($id);
    public function createMember(Array $memberData);
}
