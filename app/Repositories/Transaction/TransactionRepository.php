<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction\Transaction;
use Illuminate\Http\Request;

class TransactionRepository implements TransactionRepositoryInterface
{

    public function allTransactions()
    {
        return Transaction::all();
    }

    public function getTransactionById(int $id)
    {
        return Transaction::findOrFail($id);
    }

    public function createTransaction(Request $request)
    {
        return Transaction::create($request->all());
    }

    public function updateTransaction(Request $request, int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $request = $request->all();
        $transaction->fill($request);
        $transaction->save();
        return $transaction;
    }

    public function deleteTransaction(int $id)
    {
        return Transaction::destroy($id);
    }
}
