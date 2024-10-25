<?php

namespace App\Services\Origin;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Repositories\Transaction\TransactionRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class OriginService implements OriginServiceInterface
{
    private OriginRepositoryInterface $originRepository;

    private TransactionRepositoryInterface $transactionRepository;

    public function __construct(
        OriginRepositoryInterface $originRepository,
        TransactionRepositoryInterface $transactionRepository
    )
    {
        $this->originRepository = $originRepository;
        $this->transactionRepository = $transactionRepository;
    }

    public function allOrigins()
    {
        return $this->originRepository->allOrigins();
    }

    public function getOriginById(int $id)
    {
        return $this->originRepository->getOriginById($id);
    }

    public function createOrigin(Request $request)
    {
        return $this->originRepository->createOrigin($request);
    }

    public function updateOrigin(Request $request, int $id)
    {
        return $this->originRepository->updateOrigin($request, $id);
    }

    public function deleteOrigin(int $id): Redirector|Application|RedirectResponse
    {
        $origin = $this->transactionRepository->getTransactionByOriginId($id);

        if ($origin > 0) {
            return back()->with('error', "Item não pode ser removido");
        }

        $this->originRepository->deleteOrigin($id);

        return redirect("/origins")->with('success', "Cadastro removido com Sucesso!");
    }
}
