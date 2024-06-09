<?php

namespace Tests\Unit\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;
use App\Services\Type\TypeService;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;

class updateTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_updateType()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $typeDataUpdate = ['id' => 1, 'name' => 'itemUpdate', 'description' => 'itemUpdateDescription']; ;
        $request = Request::create("/types/1/update", "PUT", ['name' => 'itemUpdate', 'description' => 'itemUpdate']);

        $mockRepository->shouldReceive('updateType')
            ->with($request, 1)
            ->andReturn($typeDataUpdate);

        $service = new TypeService($mockRepository);
        $response = $service->updateType($request, 1);

        $this->assertEquals($typeDataUpdate, $response);

    }
}
