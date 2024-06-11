<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class createOriginTest extends TestCase
{

    public function test_createOrigin_empty()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);

        $request = Request::create("/origins/create", "POST", ['name' => null, 'description' => null]);

        $mockRepository->shouldReceive('createOrigin')->with($request)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $originService = new OriginService($mockRepository);

        $originService->createOrigin($request);

    }
    public function test_createOrigin()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $request = Request::create("/origins/create", "POST", ['id' => 1, 'name' => 'originName', 'description' => 'descriptionOrigin']);
        $originData = ['id' => 1, 'name' => 'originName', 'description' => 'descriptionOrigin'];
        $mockRepository->shouldReceive('createOrigin')->with($request)->andReturn($originData);

        $originService = new OriginService($mockRepository);
        $result = $originService->createOrigin($request);

        $this->assertEquals($originData, $result);

    }
}
