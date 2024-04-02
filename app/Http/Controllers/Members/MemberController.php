<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
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
}
