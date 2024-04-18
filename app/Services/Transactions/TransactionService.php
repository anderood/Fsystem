<?php

namespace App\Services\Transactions;

use App\Repositories\Transactions\TransactionRepositoryInterface;

class TransactionService implements TransactionServiceInterface
{

    private TransactionRepositoryInterface $transactionRepository;
    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function getAllTransactions()
    {
        return $this->transactionRepository->getAllTransactions();
    }

    public function getTransactionsById($id)
    {
        return $this->transactionRepository->getTransactionsById($id);
    }

    public function createTransaction(array $transactionData)
    {
        return $this->transactionRepository->createTransaction($transactionData);
    }
}