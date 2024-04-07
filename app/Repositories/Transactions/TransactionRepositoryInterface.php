<?php

namespace App\Repositories\Transactions;

interface TransactionRepositoryInterface
{
    public function getAllTransactions();
    public function getTransactionsById($id);
    public function createTransaction(Array $transactionData);
}
