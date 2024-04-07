<?php

namespace App\Services\Transactions;

interface TransactionServiceInterface
{
    public function getAllTransactions();
    public function getTransactionsById($id);
    public function createTransaction(Array $transactionData);
}
