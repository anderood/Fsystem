<?php

namespace Tests\Unit\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class getTransactionByIdTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getTransactionById_empty()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $mockRepository->shouldReceive("getTransactionById")->with(1)->andThrow(\InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $transactionService = new TransactionService($mockRepository);

        $transactionService->getTransactionById(1);
    }

    public function test_getTransactionById()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);

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
        $mockRepository->shouldReceive("getTransactionById")->with(1)->andReturn($transactionData);

        $transactionService = new TransactionService($mockRepository);

        $result = $transactionService->getTransactionById(1);

        $this->assertEquals($transactionData, $result);
    }
}
