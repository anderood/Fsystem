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
        return $this->memberService->getAllMembers();
    }

    public function getMemberById($id)
    {
        return $this->memberService->getMemberById($id);
    }

    public function create(Request $request)
    {
        $membersData = $request->all();
        return $this->memberService->create($membersData);
    }
}
