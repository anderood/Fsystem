<?php

namespace App\Services\Type;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Repositories\Type\TypeRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TypeService implements TypeServiceInterface
{
    protected TypeRepositoryInterface $typeRepository;
    protected TransactionRepositoryInterface $transactionRepository;

    public function __construct(
        TypeRepositoryInterface $typeRepository,
        TransactionRepositoryInterface $transactionRepository
    )
    {
        $this->typeRepository = $typeRepository;
        $this->transactionRepository = $transactionRepository;
    }

    public function allTypes()
    {
        return $this->typeRepository->allTypes();
    }

    public function getTypeById(int $id)
    {
        return $this->typeRepository->getTypeById($id);
    }

    public function createType(Request $request)
    {
        return $this->typeRepository->createType($request);
    }

    public function updateType(Request $request, int $id)
    {
        return $this->typeRepository->updateType($request, $id);
    }

    public function deleteType(int $id): Redirector|RedirectResponse|Application
    {
        $type = $this->transactionRepository->getTransactionByTypeId($id);

        if ($type > 0) {
            return back()->with('error', "Item não pode ser removido");
        }

        $this->typeRepository->deleteType($id);

        return redirect("/types")->with('success', "Cadastro removido com Sucesso!");
    }
}
