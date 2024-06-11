<?php

namespace App\Repositories\Movement;

use App\Models\Movement\Movement;
use Illuminate\Http\Request;

class MovementRepository implements MovementRepositoryInterface
{

    public function allMovements()
    {
        return Movement::all();
    }

    public function getMovementById(int $id)
    {
        return Movement::findOrFail($id);
    }

    public function createMovement(Request $request)
    {
        return Movement::create($request->all());
    }

    public function updateMovement(Request $request, int $id)
    {
        $movement = Movement::findOrFail($id);
        $movementRequest = $request->all();
        $movement->update($movementRequest);
        return $movement;
    }

    public function deleteMovement(int $id)
    {
        return Movement::destroy($id);
    }
}
