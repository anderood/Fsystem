<?php

namespace App\Http\Controllers\Origins;

use App\Http\Controllers\Controller;
use App\Models\Origin\Origin;
use App\Services\Origin\OriginServiceInterface;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    private $originService;

    public function __construct(OriginServiceInterface $originService)
    {
        $this->originService = $originService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $origins = $this->originService->allOrigins();
        return view('origins.home_origins', ['origins' => $origins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('origins.create_origins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->originService->createOrigin($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function show(Origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return $this->originService->getOriginById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Origin\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return $this->originService->updateOrigin($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->originService->deleteOrigin($id);
    }
}
