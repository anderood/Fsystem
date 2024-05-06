<?php

namespace App\Repositories\Transactions;

interface TransactionRepositoryInterface
{
    public function getAllTransactions();
    public function getAllMembers();
    public function getAllOrigins();
    public function getAllCategories();
    public function getAllTypes();
    public function getTransactionsById($id);
    public function createTransaction(Array $transactionData);
    public function updateTransaction(int $id, Array $transactionData);
}
