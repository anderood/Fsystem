<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Member\Member;
use App\Services\Member\MemberServiceInterface;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->memberService->allMembers();
        return view('members.home_members', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.crete_members');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $this->memberService->createMember($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return $this->memberService->getMemberById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return $this->memberService->updateMember($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->memberService->deleteMember($id);
    }
}
