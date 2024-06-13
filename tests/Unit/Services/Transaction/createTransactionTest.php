<?php

namespace Tests\Unit\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class createTransactionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_createTransaction_empty()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $request = Request::create("/transactions/create/", "POST", []);

        $mockRepository->shouldReceive("createTransaction")->with($request)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $transactionService = new TransactionService($mockRepository);

        $transactionService->createTransaction($request);
    }

    public function test_createTransaction()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $transactionData = [
            [
                'id' => 1,
                'title' => 'title',
                'amount' => 1,
                'date' => '2024-01-01',
                'member_id' => 1,
                'type_id' => 1,
                'origin_id' => 1,
                'movement_id' => 1,
                'observation' => 'observation1',
            ],
            [
                'id' => 12,
                'title' => 'title',
                'amount' => 12,
                'date' => '2024-01-01',
                'member_id' => 12,
                'type_id' => 12,
                'origin_id' => 21,
                'movement_id' => 21,
                'observation' => 'observation21',
            ]
        ];
        $request = Request::create("/transactions/create/", "POST", $transactionData);

        $mockRepository->shouldReceive("createTransaction")->with($request)->andReturn($transactionData);

        $transactionService = new TransactionService($mockRepository);

        $result = $transactionService->createTransaction($request);

        $this->assertEquals($transactionData, $result);
    }
}
