<?php

namespace App\Http\Controllers\Transactions;

interface TransactionControllerInterface
{
    public function index();
    public function getTransactionsById($id);
    public function create(Array $transactionData);
}
