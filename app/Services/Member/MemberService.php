<?php

namespace App\Services\Member;

use App\Repositories\Member\MemberRepositoryInterface;
use App\Repositories\Transaction\TransactionRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MemberService implements MemberServiceInterface
{
    protected MemberRepositoryInterface $memberRepository;

    protected TransactionRepositoryInterface $transactionRepository;

    public function __construct(
        MemberRepositoryInterface $memberRepository,
        TransactionRepositoryInterface $transactionRepository
    )
    {
        $this->memberRepository = $memberRepository;
        $this->transactionRepository = $transactionRepository;
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

    public function deleteMember(int $id): Redirector|Application|RedirectResponse
    {
        $transaction = $this->transactionRepository->getTransactionByMemberId($id);

        if ($transaction > 0) {

            $this->memberRepository->softDeleteMember($id);

            return redirect("/members")->with('success', "Cadastro removido com Sucesso!");
        }

        $this->memberRepository->deleteMember($id);

        return redirect("/members")->with('success', "Cadastro removido com Sucesso!");
    }

    public function updateMember(Request $request, int $id)
    {
        return $this->memberRepository->updateMember($request, $id);
    }

    public function softDeleteMember(int $id)
    {
        return $this->memberRepository->softDeleteMember($id);
    }

    public function allMembersWithTrashed()
    {
        return $this->memberRepository->allMembersWithTrashed();
    }
}
