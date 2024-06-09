<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class updateOriginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_updateOrigin_empty()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $request = Request::create("/origins/1/update", "PUT", ['name' => null, 'description' => null ]);

        $mockRepository->shouldReceive('updateOrigin')
            ->once()
            ->with($request, 1)
            ->andThrow(InvalidArgumentException::class);

        $originService = new OriginService($mockRepository);

        $this->expectException(InvalidArgumentException::class);

        $originService->updateOrigin($request, 1);

    }

    public function test_updateOrigin()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $originData = ['id' => 1, 'name' => 'originUpdate', 'description' => 'descriptionUpdate'];
        $request = Request::create("/origins/1/update", "PUT", $originData);

        $mockRepository->shouldReceive('updateOrigin')
            ->once()
            ->with($request, 1)
            ->andReturn($originData);

        $originService = new OriginService($mockRepository);

        $result = $originService->updateOrigin($request, 1);

        $this->assertEquals($originData, $result);

    }
}
