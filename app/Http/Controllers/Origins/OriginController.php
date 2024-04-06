<?php

namespace App\Http\Controllers\Origins;

use App\Http\Controllers\Controller;
use App\Models\Origin\Origin;
use App\Services\Origins\OriginServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OriginController extends Controller
{
    protected OriginServiceInterface $originService;
    public function __construct(OriginServiceInterface $originService)
    {
        $this->originService = $originService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $allOrigins = $this->originService->getAllOrigins();
        return view('origins.list_origins', ['origins' => $allOrigins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('origins.create_origins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $allOrigins = $request->all();
        return $this->originService->createOrigin($allOrigins);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return Response
     */
    public function show(Origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return Response
     */
    public function edit(Origin $origin)
    {
        return $this->originService->getOriginById($origin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Origin\Origin  $origin
     * @return Response
     */
    public function update(Request $request, Origin $origin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Origin\Origin  $origin
     * @return Response
     */
    public function destroy(Origin $origin)
    {
        //
    }
}
