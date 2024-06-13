<?php

namespace Tests\Unit\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class updateTransactionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_updateTransaction_empty()
    {
        $mockerRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $request = Request::create("/transactions/1/update", "PUT", []);
        $mockerRepository->shouldReceive("updateTransaction")->with($request, 1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $transactionService = new TransactionService($mockerRepository);

        $transactionService->updateTransaction($request, 1);
    }

    public function test_updateTransaction()
    {
        $mockerRepository = Mockery::mock(TransactionRepositoryInterface::class);

        $transactionData = [
            'id' => 1,
            'title' => 'title',
            'amount' => 1,
            'date' => '2024-02-01',
            'member_id' => 1,
            'type_id' => 1,
            'origin_id' => 1,
            'movement_id' => 1,
            'observation' => 'observation1',
        ];

        $request = Request::create("/transactions/1/update", "PUT", $transactionData);

        $mockerRepository->shouldReceive("updateTransaction")->with($request, 1)->andReturn($transactionData);

        $transactionService = new TransactionService($mockerRepository);

        $result = $transactionService->updateTransaction($request, 1);

        $this->assertEquals($transactionData, $result);
    }
}
