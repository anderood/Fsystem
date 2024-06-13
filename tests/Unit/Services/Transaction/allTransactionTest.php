<?php

namespace Tests\Unit\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class allTransactionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_allTransaction_empty()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $mockRepository->shouldReceive("allTransactions")->andReturn([]);

        $transactionService = new transactionService($mockRepository);
        $result = $transactionService->allTransactions();
        $this->assertEquals([], $result);

    }

    public function test_allTransaction()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);

        $transactionData = [
            ['id' => 1, 'amount' => 1, 'date' => '2024-01-01', 'member_id' => 1, 'type_id' => 1, 'origin_id' => 1, 'movement_id' => 1, 'observation' => 'observation'],
            ['id' => 2, 'amount' => 12, 'date' => '2024-01-01', 'member_id' => 12, 'type_id' => 12, 'origin_id' => 21, 'movement_id' => 21, 'observation' => 'observation2'],
        ];

        $mockRepository->shouldReceive("allTransactions")->andReturn($transactionData);

        $transactionService = new transactionService($mockRepository);
        $result = $transactionService->allTransactions();
        $this->assertEquals($transactionData, $result);

    }
}
