<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Models\Transaction\Transactions;
use App\Services\Transactions\TransactionServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    protected TransactionServiceInterface $transactionService;
    public function __construct(TransactionServiceInterface $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $allTransactions = $this->transactionService->getAllTransactions();
        return view('transactions.home_transactions', ['transactions' => $allTransactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $newTransaction = $request->all();
//        var_dump($newTransaction);
        return $this->transactionService->createTransaction($newTransaction);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        $allMembers = $this->transactionService->getAllMembers();
        $allOrigins = $this->transactionService->getAllOrigins();
        $allTypes = $this->transactionService->getAllTypes();
        $allCategories = $this->transactionService->getAllCategories();

        return view('transactions.create_transactions', [
            'members' => $allMembers,
            'origins' => $allOrigins,
            'types' => $allTypes,
            'categories' => $allCategories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transactions $transactions
     * @return Response
     */
    public function edit($id)
    {
        return $this->transactionService->getTransactionsById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Transactions $transactions
     * @return Response
     */
    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Transactions $transactions
     * @return Response
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
