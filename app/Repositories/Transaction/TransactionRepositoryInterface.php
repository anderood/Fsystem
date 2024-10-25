<?php

namespace App\Repositories\Transaction;

use Illuminate\Http\Request;

interface TransactionRepositoryInterface
{
    public function allTransactions();

    public function getTransactionById(int $id);

    public function createTransaction(Request $request);

    public function updateTransaction(Request $request, int $id);

    public function deleteTransaction(int $id);

    public function getTransactionByOriginId(int $id);

    public function getTransactionByTypeId(int $id);

    public function getTransactionByMovementId(int $id);

    public function getTransactionByMemberId(int $id);
}
