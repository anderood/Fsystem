<?php

namespace Tests\Unit\tests\Unit\Services\Movements;

use App\Repositories\Movement\MovementRepository;
use App\Repositories\Movement\MovementRepositoryInterface;
use App\Services\Movement\MovementService;
use Mockery;
use PHPUnit\Framework\TestCase;

class allMovementsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_allMovements_empty()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $mockRepository->shouldReceive('allMovements')->andReturn([]);

        $movementService = new MovementService($mockRepository);
        $result = $movementService->allMovements();

        $this->assertEmpty($result);
    }

    public function test_allMovements()
    {
        $mockRepository = Mockery::mock(MovementRepository::class);
        $allMovements = [
            ['id' => 1, 'name' => 'movement 1', 'description' => 'description1'],
            ['id' => 2, 'name' => 'movement 2', 'description' => 'description2'],
        ];
        $mockRepository->shouldReceive('allMovements')->andReturn($allMovements);

        $movementService = new MovementService($mockRepository);
        $result = $movementService->allMovements();

        $this->assertEquals($allMovements, $result);
    }
}
