<?php

namespace Tests\Unit\tests\Unit\Services\Movements;

use App\Repositories\Movement\MovementRepositoryInterface;
use App\Services\Movement\MovementService;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class updateMovementTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_updateMovement_empty()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);

        $request = Request::create("/movement/1/update", "PUT", ['id' => '', 'name' => '', 'description' => '']);
        $mockRepository->shouldReceive("updateMovement")->with($request, 1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $movement = new MovementService($mockRepository);
        $movement->updateMovement($request, 1);
    }

    public function test_updateMovement()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $movementUpdate = [
            ['id' => '', 'name' => '', 'description' => '']
        ];
        $request = Request::create("/movement/1/update", "PUT", $movementUpdate);
        $mockRepository->shouldReceive("updateMovement")->with($request, 1)->andReturn($movementUpdate);

        $movement = new MovementService($mockRepository);
        $result = $movement->updateMovement($request, 1);

        $this->assertEquals($movementUpdate, $result);
    }
}
