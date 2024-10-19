<?php

namespace App\Http\Controllers\Origins;

use App\Http\Controllers\Controller;
use App\Http\Requests\OriginRequest;
use App\Models\Origin\Origin;
use App\Services\Origin\OriginServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OriginController extends Controller
{
    private OriginServiceInterface $originService;

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
        $origins = $this->originService->allOrigins();
        return view('origins.home_origins', ['origins' => $origins]);
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
     * @param OriginRequest $request
     * @return Origin
     */
    public function store(OriginRequest $request): Origin
    {
        return $this->originService->createOrigin($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Origin $origin
     * @return Response
     */
    public function show(Origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $origin = $this->originService->getOriginById($id);
        return view('origins.edit_origins', ['origin' => $origin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OriginRequest $request
     * @param int $id
     * @return Origin
     */
    public function update(OriginRequest $request, int $id): Origin
    {
        return $this->originService->updateOrigin($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        return $this->originService->deleteOrigin($id);
    }
}
