<?php

namespace App\Repositories\Members;

use App\Models\Member;

class MemberRepository implements MemberRepositoryInterface
{

    public function allMembers()
    {
        return Member::all();
    }

    public function getMemberById($id)
    {
        return Member::findOrFail($id);
    }

    public function create(array $memberData)
    {
        return Member::create($memberData);
    }
}
