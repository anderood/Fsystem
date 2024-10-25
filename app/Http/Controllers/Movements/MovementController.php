<?php

namespace App\Http\Controllers\Movements;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovementRequest;
use App\Models\Movement\Movement;
use App\Services\Movement\MovementServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

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
     * @return RedirectResponse
     */
    public function store(MovementRequest $request): RedirectResponse
    {
        $this->movementService->createMovement($request);
        return redirect('/movements')->with('success', 'Criado com Sucesso!');
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
     * @return Redirector|Application|RedirectResponse
     */
    public function update(MovementRequest $request, int $id): Application|RedirectResponse|Redirector
    {
        $this->movementService->updateMovement($request, $id);
        return redirect("/movements")->with('success', "Cadastro atualizado com Sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(int $id): Application|RedirectResponse|Redirector
    {
        return $this->movementService->deleteMovement($id);
    }
}
