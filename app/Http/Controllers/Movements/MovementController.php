<?php

namespace App\Http\Controllers\Movements;

use App\Http\Controllers\Controller;
use App\Models\Movement\Movement;
use App\Services\Movement\MovementServiceInterface;
use Illuminate\Http\Request;

class MovementController extends Controller
{

    private $movementService;

    public function __construct(MovementServiceInterface $movementService)
    {
        return $this->movementService = $movementService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->movementService->allMovements();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->movementService->createMovement($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movement\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function show(Movement $movement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movement\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function edit(Movement $movement)
    {
        return $this->movementService->updateMovement($request, $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movement\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movement $movement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movement\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movement $movement)
    {
        return $this->movementService->deleteMovement($id);
    }
}
