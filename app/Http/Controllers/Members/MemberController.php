<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member\Member;
use App\Services\Member\MemberServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
     * @return Response
     */
    public function store(MemberRequest $request): Response
    {
        return $this->memberService->createMember($request);
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
     * @return Member
     */
    public function update(MemberRequest $request, int $id): Member
    {
        return $this->memberService->updateMember($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        return $this->memberService->deleteMember($id);
    }
}
