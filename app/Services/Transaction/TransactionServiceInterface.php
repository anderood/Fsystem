<?php

namespace App\Services\Transaction;

use Illuminate\Http\Request;

interface TransactionServiceInterface
{
    public function allTransactions();

    public function getTransactionById(int $id);

    public function createTransaction(Request $request);

    public function updateTransaction(Request $request, int $id);

    public function deleteTransaction(int $id);
}
