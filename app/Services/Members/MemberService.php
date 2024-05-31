<?php

namespace App\Services\Members;

use App\Repositories\Members\MemberRepositoryInterface;
use Illuminate\Http\Request;

class MemberService implements MemberServiceInterface
{
    protected MemberRepositoryInterface $memberRepository;
    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function getAllMembers()
    {
        return $this->memberRepository->allMembers();
    }

    public function getMemberById($id)
    {
        return $this->memberRepository->getMemberById($id);
    }

    public function createMember(array $memberData)
    {
        return $this->memberRepository->createMember($memberData);
    }

    public function updateMember(Request $request, int $id)
    {
        return $this->memberRepository->updateMember($request, $id);
    }
}
