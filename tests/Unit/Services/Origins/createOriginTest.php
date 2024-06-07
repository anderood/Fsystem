<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class createOriginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
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
