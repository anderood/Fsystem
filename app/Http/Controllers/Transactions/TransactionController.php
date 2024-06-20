<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use App\Services\Transaction\TransactionServiceInterface;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    private $transactionService;

    public function __construct(TransactionServiceInterface $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = $this->transactionService->allTransactions();
        return view('transactions.home_transactions', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transactions.create_transactions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->transactionService->createTransaction($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $transaction = $this->transactionService->getTransactionById($id);
        return view('transactions.edit_transactions', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->transactionService->updateTransaction($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->transactionService->deleteTransaction($id);
    }
}
