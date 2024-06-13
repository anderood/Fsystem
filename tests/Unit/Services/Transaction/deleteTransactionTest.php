<?php

namespace Tests\Unit\Services\Transaction;

use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Services\Transaction\TransactionService;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class deleteTransactionTest extends TestCase
{

    public function test_deleteTransaction_empty()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $mockRepository->shouldReceive('deleteTransaction')->with(1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $transactionService = new TransactionService($mockRepository);

        $transactionService->deleteTransaction(1);

    }
    public function test_deleteTransaction()
    {
        $mockRepository = Mockery::mock(TransactionRepositoryInterface::class);
        $mockRepository->shouldReceive('deleteTransaction')->with(1)->andReturn([]);

        $transactionService = new TransactionService($mockRepository);

        $result = $transactionService->deleteTransaction(1);

        $this->assertEquals([], $result);
    }
}
