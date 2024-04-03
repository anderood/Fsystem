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
        return view('members.list_users_members', ['members' => $members]);
    }

    public function getMemberById($id)
    {
        return $this->memberService->getMemberById($id);
    }

    public function show()
    {
        return view('members.create_members');
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }
}
