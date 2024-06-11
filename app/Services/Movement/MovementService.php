<?php

namespace App\Services\Movement;

use App\Repositories\Movement\MovementRepositoryInterface;
use Illuminate\Http\Request;

class MovementService implements MovementServiceInterface
{
    private $movementRepository;

    public function __construct(MovementRepositoryInterface $movementRepository)
    {
        $this->movementRepository = $movementRepository;
    }

    public function allMovements()
    {
        return $this->movementRepository->allMovements();
    }

    public function getMovementById(int $id)
    {
        return $this->movementRepository->getMovementById($id);
    }

    public function createMovement(Request $request)
    {
        return $this->movementRepository->createMovement($request);
    }

    public function updateMovement(Request $request, int $id)
    {
        return $this->movementRepository->updateMovement($request, $id);
    }

    public function deleteMovement(int $id)
    {
        return $this->movementRepository->deleteMovement($id);
    }
}
