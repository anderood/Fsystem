<?php

namespace App\Services\Members;

use App\Repositories\Members\MemberRepositoryInterface;

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
}
