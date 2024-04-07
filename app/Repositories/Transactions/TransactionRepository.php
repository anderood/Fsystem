<?php

namespace App\Repositories\Transactions;

use App\Models\Transaction\Transactions;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function getAllTransactions()
    {
        return Transactions::all();
    }

    public function getTransactionsById($id)
    {
        // TODO: Implement getTransactionsById() method.
    }

    public function createTransaction(array $transactionData)
    {
        // TODO: Implement createTransaction() method.
    }
}
