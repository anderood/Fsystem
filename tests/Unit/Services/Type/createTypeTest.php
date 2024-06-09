<?php

namespace Tests\Unit\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;
use App\Services\Type\TypeService;
use Illuminate\Http\Request;
use Mockery;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class createTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_createType()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $request = Request::create('/types/create', 'POST', ['name' => 'item1', 'description' => 'description1']);

        $createTypes = ['id' => 1, 'name' => 'item1', 'description' => 'description1'];

        $mockRepository->shouldReceive('createType')->once()->with($request)->andReturn($createTypes);

        $typeService = new TypeService($mockRepository);

        $result = $typeService->createType($request);

        $this->assertEquals($createTypes, $result);

    }

    public function test_createType_empty()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $request = Request::create('/types/create', 'POST', ['name' => null, 'description' => null]);

        $mockRepository->shouldReceive('createType')
            ->once()
            ->with($request)
            ->andThrow(InvalidArgumentException::class);

        $typeService = new TypeService($mockRepository);

        $this->expectException(InvalidArgumentException::class);

        $typeService->createType($request);

    }
}
