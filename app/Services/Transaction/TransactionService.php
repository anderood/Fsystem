<?php

namespace App\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use Illuminate\Http\Request;

class TransactionService implements TransactionServiceInterface
{
    private $transactionRepository;

    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function allTransactions()
    {
        return $this->transactionRepository->allTransactions();
    }

    public function getTransactionById(int $id)
    {
        return $this->transactionRepository->getTransactionById($id);
    }

    public function createTransaction(Request $request)
    {
        return $this->transactionRepository->createTransaction($request);
    }

    public function updateTransaction(Request $request, int $id)
    {
        return $this->transactionRepository->updateTransaction($request, $id);
    }

    public function deleteTransaction(int $id)
    {
        return $this->transactionRepository->deleteTransaction($id);
    }
}
