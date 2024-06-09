<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class getOriginByIdTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getOriginById_empty()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $mockRepository->shouldReceive('getOriginById')->with(0)->andThrow(InvalidArgumentException::class);

        $originService = new OriginService($mockRepository);

        $this->expectException(InvalidArgumentException::class);
        $originService->getOriginById(0);

    }

    public function test_getOriginById()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $originData = ['id' => 1, 'name' => 'origin', 'description' => 'description'];
        $mockRepository->shouldReceive('getOriginById')->with(1)->andReturn($originData);

        $originService = new OriginService($mockRepository);
        $result = $originService->getOriginById(1);
        $this->assertEquals($originData, $result);

    }

}
