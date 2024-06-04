<?php

namespace App\Services\Member;

use App\Repositories\Member\MemberRepositoryInterface;
use Illuminate\Http\Request;

class MemberService implements MemberServiceInterface
{
    private $memberRepository;
    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function allMembers()
    {
        return $this->memberRepository->allMembers();
    }

    public function getMemberById(int $id)
    {
        return $this->memberRepository->getMemberById($id);
    }

    public function createMember(Request $request)
    {
        return $this->memberRepository->createMember($request);
    }

    public function deleteMember(int $id)
    {
        return $this->memberRepository->deleteMember($id);
    }
}
