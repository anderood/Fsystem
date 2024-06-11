<?php

namespace Tests\Unit\tests\Unit\Services\Movements;

use App\Repositories\Movement\MovementRepositoryInterface;
use App\Services\Movement\MovementService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class createMovementTest extends TestCase
{

    public function test_createMovement_empty()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $request = Request::create("/movements/create", "POST", ['id' => '', 'name' => '', 'description' => '']);
        $mockRepository->shouldReceive("createMovement")->with($request)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $movement = new MovementService($mockRepository);
        $movement->createMovement($request);

    }

    public function test_createMovement()
    {
        $mockRepository = Mockery::mock(MovementRepositoryInterface::class);
        $movementCreate = [
            ['id' => 1, 'name' => 'entrada', 'description' => 'description']
        ];
        $request = Request::create("/movements/create", "POST", $movementCreate);
        $mockRepository->shouldReceive("createMovement")->with($request)->andReturn($movementCreate);

        $movement = new MovementService($mockRepository);
        $result = $movement->createMovement($request);

        $this->assertEquals($movementCreate, $result);
    }
}
