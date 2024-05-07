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

    public function getAllMembers()
    {
        return $this->transactionRepository->getAllMembers();
    }

    public function getAllOrigins()
    {
        return $this->transactionRepository->getAllOrigins();
    }

    public function getAllCategories()
    {
        return $this->transactionRepository->getAllCategories();
    }

    public function getAllTypes()
    {
        return $this->transactionRepository->getAllTypes();
    }

    public function updateTransaction(int $id, array $transactionData)
    {
        return $this->transactionRepository->updateTransaction($id, $transactionData);
    }

    public function destroyTransaction(int $id)
    {
        return $this->transactionRepository->destroyTransaction($id);
    }
}
