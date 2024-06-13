<?php

namespace App\Repositories\Member;

use App\Models\Member\Member;
use Illuminate\Http\Request;

class MemberRepository implements MemberRepositoryInterface
{

    public function allMembers()
    {
        return Member::all();
    }

    public function getMemberById(int $id)
    {
        return Member::findOrFail($id);
    }

    public function createMember(Request $request)
    {
        return Member::create($request->all());
    }

    public function deleteMember(int $id)
    {
        return Member::destroy($id);
    }

    public function updateMember(Request $request, int $id)
    {
        $member = Member::findOrFail($id);
        $request = $request->all();

        return $member->fill($request);

    }
}
