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
        return $transactionId = Transactions::find($id);
    }

    public function createTransaction(array $transactionData)
    {
        return Transactions::create($transactionData);
    }
}
