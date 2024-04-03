<?php

namespace App\Services\Members;

interface MemberServiceInterface
{
    public function getAllMembers();
    public function getMemberById($id);
    public function create(Array $memberData);
}
