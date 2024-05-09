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
        return Transactions::find($id);
    }

    public function createTransaction(array $transactionData)
    {
        $data = [
          'title' => $transactionData['title'],
          'amount' => $transactionData['amount'],
          'date' => $transactionData['date'],
          'member_id' => $transactionData['member_id'] != 0 ? $transactionData['member_id'] : null,
          'origin_id' => $transactionData['origin_id'],
          'category_id' => $transactionData['category_id'],
          'type_id' => $transactionData['type_id'],
          'observations' => $transactionData['observations'],
        ];
        return Transactions::create($data);
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

    public function updateTransaction(int $id, array $transactionData)
    {
        $transaction = Transactions::findOrFail($id);

        $transaction->fill($transactionData);

        $transaction->save();

        return $transaction;
    }

    public function destroyTransaction(int $id): int
    {
        return Transactions::destroy($id);
    }
}
