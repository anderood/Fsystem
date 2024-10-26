<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member\Member;
use App\Services\Member\MemberServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class MemberController extends Controller
{
    private $memberService;

    public function __construct(MemberServiceInterface $memberService)
    {
        $this->memberService = $memberService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $members = $this->memberService->allMembers();
        return view('members.home_members', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('members.create_members');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MemberRequest $request
     * @return RedirectResponse|Redirector|Application
     */
    public function store(MemberRequest $request): Application|RedirectResponse|Redirector
    {
        $this->memberService->createMember($request);
        return redirect("/members")->with('success', "Cadastro realizado com Sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @return Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $member = $this->memberService->getMemberById($id);
        return view('members.edit_members', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MemberRequest $request
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(MemberRequest $request, int $id): Application|RedirectResponse|Redirector
    {
        $this->memberService->updateMember($request, $id);
        return redirect("/members")->with('success', "Cadastro atualizado com Sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(int $id): Application|RedirectResponse|Redirector
    {
        return $this->memberService->deleteMember($id);
    }
}
