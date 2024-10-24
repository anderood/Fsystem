<?php

namespace App\Http\Controllers\Movements;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovementRequest;
use App\Models\Movement\Movement;
use App\Services\Movement\MovementServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovementController extends Controller
{

    private MovementServiceInterface $movementService;

    public function __construct(MovementServiceInterface $movementService)
    {
        return $this->movementService = $movementService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $movements = $this->movementService->allMovements();
        return view('movements.home_movements', ['movements' => $movements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('movements.create_movements');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MovementRequest $request
     * @return Movement
     */
    public function store(MovementRequest $request): Movement
    {
        return $this->movementService->createMovement($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Movement $movement
     * @return Response
     */
    public function show(Movement $movement)
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
        $movement = $this->movementService->getMovementById($id);
        return view('movements.edit_movements', ['movement' => $movement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MovementRequest $request
     * @param int $id
     * @return Movement
     */
    public function update(MovementRequest $request, int $id): Movement
    {
        return $this->movementService->updateMovement($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        return $this->movementService->deleteMovement($id);
    }
}
