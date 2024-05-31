<?php

namespace App\Repositories\Members;

use App\Http\Requests\Members\CreateMemberRequest;
use App\Models\Address;
use App\Models\Member\Member;
use Illuminate\Validation\ValidationException;

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
        $validator = CreateMemberRequest::validate($memberData);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $member = Member::create([
            "first_name" => $memberData["first_name"],
            "last_name" => $memberData["last_name"],
            "phone" => $memberData["phone"],
            "dateOfBirth" => $memberData["dateOfBirth"],
            "email" => $memberData["email"],
            "isActive" => $memberData["isActive"],
            "isMember" => $memberData["isMember"],
            "observations" => $memberData["observations"],
        ]);

        Address::create([
            "zipcode" => $memberData["zipcode"],
            "street" => $memberData["street"],
            "number" => $memberData["number"],
            "complement" => $memberData["complement"],
            "district" => $memberData["district"],
            "city" => $memberData["city"],
            "state" => $memberData["state"],
            "member_id" => $member->id,
        ]);

        return Member::with('address')->find($member->id);
    }
}
