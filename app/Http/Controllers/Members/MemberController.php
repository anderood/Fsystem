<?php

namespace App\Http\Controllers\Members;

use App\Services\Members\MemberServiceInterface;
use Illuminate\Http\Request;

class MemberController implements MemberControllerInterface
{
    protected MemberServiceInterface $memberService;
    public function __construct(MemberServiceInterface $memberService)
    {
        $this->memberService = $memberService;
    }

    public function index()
    {
        $members =  $this->memberService->getAllMembers();
        return view('members.home_members', ['members' => $members]);
    }

    public function edit($id)
    {
        $member = $this->memberService->getMemberById($id);

        return view('members.edit_members', ['member' => $member]);
    }

    public function show()
    {
        return view('members.create_members');
    }

    public function createMember(Request $request)
    {
        $memberData = $request->all();
        return $this->memberService->createMember($memberData);
    }

    public function update(Request $request, int $id)
    {
        return $this->memberService->updateMember($request, $id);
    }
}
