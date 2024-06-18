<?php

namespace Tests\Unit\tests\Unit\Services\Movements;

use App\Repositories\Movement\MovementRepositoryInterface;
use App\Services\Movement\MovementService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class deleteMovements extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_deleteMovement_empty()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $mockRepository->shouldReceive("deleteMovement")->with( 1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $movementService = new MovementService($mockRepository);
        $movementService->deleteMovement(1);
    }

    public function test_deleteMovement()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $mockRepository->shouldReceive("deleteMovement")->with( 1)->andReturn([]);

        $movementService = new MovementService($mockRepository);
        $result = $movementService->deleteMovement(1);

        $this->assertEquals([], $result);
    }
}
