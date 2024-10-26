<?php

namespace App\Repositories\Member;

use App\Models\Address\Address;
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
        $addressMember = $request->only(
            'zip_code',
            'street',
            'state',
            'district',
            'city',
            'number',
            'complement',
        );

        $address = Address::create($addressMember);

        return Member::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'dateOfBirth' => $request->dateOfBirth,
            'email' => $request->email,
            'is_active' => $request->is_active,
            'address_id' => $address->id,
            'observations' => $request->first_name
        ]);
    }

    public function deleteMember(int $id)
    {
        $member = Member::find($id);
        Address::destroy($member->address_id);
        return Member::destroy($id);
    }

    public function updateMember(Request $request, int $id)
    {
        $member = Member::findOrFail($id);
        $address = Address::findOrFail($member->address_id);

        $addressRequest = $request->only(
            'zip_code',
            'street',
            'state',
            'district',
            'city',
            'number',
            'complement',
        );

        $address->fill($addressRequest);
        $address->save();

        $memberUpdate = $request->only([
            'first_name',
            'last_name' ,
            'phone',
            'dateOfBirth',
            'email',
            'is_active',
            'address_id',
            'observations'
        ]);

        $member->fill($memberUpdate);
        $member->save();

        return $member;

    }

    public function softDeleteMember(int $id): void
    {
        $member = Member::find($id);
        $member->delete();
        return;
    }
}
