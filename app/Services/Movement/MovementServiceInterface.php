<?php

namespace App\Services\Movement;

use Illuminate\Http\Request;

interface MovementServiceInterface
{
    public function allMovements();

    public function getMovementById(int $id);

    public function createMovement(Request $request);

    public function updateMovement(Request $request, int $id);

    public function deleteMovement(int $id);

    public function findMovement(String $search);
}
