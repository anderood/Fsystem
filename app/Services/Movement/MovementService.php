<?php

namespace App\Services\Movement;

use App\Repositories\Movement\MovementRepositoryInterface;
use App\Repositories\Transaction\TransactionRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MovementService implements MovementServiceInterface
{
    protected MovementRepositoryInterface $movementRepository;

    protected TransactionRepositoryInterface $transactionRepository;


    public function __construct(MovementRepositoryInterface $movementRepository, TransactionRepositoryInterface $transactionRepository)
    {
        $this->movementRepository = $movementRepository;
        $this->transactionRepository = $transactionRepository;
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

    public function deleteMovement(int $id): RedirectResponse
    {
        $qtdMovement = $this->transactionRepository->getTransactionByMovementId($id);

        if ($qtdMovement > 0) {
            return back()->with('error', "Item não pode ser removido");
        }

        $this->movementRepository->deleteMovement($id);

        return redirect("/movements")->with('success', "Cadastro removido com Sucesso!");
    }
}
