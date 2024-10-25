<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Member\Member;
use App\Models\Movement\Movement;
use App\Models\Origin\Origin;
use App\Models\Transaction\Transaction;
use App\Models\Type\Type;
use App\Services\Transaction\TransactionServiceInterface;
use Doctrine\DBAL\Types\Types;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

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
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        $allMembers = Member::all();
        $allTypes = Type::all();
        $allOrigins = Origin::all();
        $allMovements = Movement::all();

        return view('transactions.create_transactions', [
            'members'=> $allMembers,
            'types'=> $allTypes,
            'origins'=> $allOrigins,
            'movements'=> $allMovements,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransactionRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(TransactionRequest $request)
    {
        $this->transactionService->createTransaction($request);

        return redirect("/transactions")->with("success", "Criado com Sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $allMembers = Member::all();
        $allTypes = Type::all();
        $allOrigins = Origin::all();
        $allMovements = Movement::all();
        $transaction = $this->transactionService->getTransactionById($id);

        return view('transactions.edit_transactions', [
            'transaction' => $transaction,
            'types' => $allTypes,
            'origins' => $allOrigins,
            'movements' => $allMovements,
            'members' => $allMembers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransactionRequest $request
     * @param $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(TransactionRequest $request, $id): Redirector|Application|RedirectResponse
    {
        $this->transactionService->updateTransaction($request, $id);
        return redirect("/transactions")->with('success', "Cadastro atualizado com Sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->transactionService->deleteTransaction($id);
    }
}
