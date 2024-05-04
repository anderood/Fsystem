<?php

namespace App\Repositories\Transactions;

use App\Models\Category\Category;
use App\Models\Member;
use App\Models\Origin\Origin;
use App\Models\Transaction\Transactions;
use App\Models\Types;

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

    public function getAllMembers()
    {
        return Member::all();
    }

    public function getAllOrigins()
    {
        return Origin::all();
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function getAllTypes()
    {
        return Types::all();
    }
}
