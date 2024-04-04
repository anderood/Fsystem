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

    public function createMember(array $memberData)
    {
        $member = Member::create([
            'first_name' => $memberData['first_name'],
            'last_name' => $memberData['last_name'],
            'phone' => $memberData['phone'],
            'dateOfBirth' => $memberData['dateOfBirth'],
            'email' => $memberData['email'],
            'isActive' => $memberData['isActive'],
            'isMember' => $memberData['isMember'],
            'observations' => $memberData['observations'],
        ]);

        return Member::find($member->id);
    }
}
