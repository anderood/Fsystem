<?php

namespace Tests\Unit\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;
use App\Services\Type\TypeService;
use Mockery;
use PHPUnit\Framework\TestCase;

class allTypesTest extends TestCase
{

    public function test_allTypes_empty()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $types = [];

        $mockRepository->shouldReceive('allTypes')->andReturn($types);

        $typeService = new TypeService($mockRepository);
        $result = $typeService->allTypes();

        $this->assertEmpty($result);
    }

    public function test_allTypes()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $types = [
            ['id' => 1, 'name' => 'item1', 'description' => 'description1'],
            ['id' => 2, 'name' => 'item1', 'description' => 'description2'],
        ];

        $mockRepository->shouldReceive('allTypes')->andReturn($types);
        $typeService = new TypeService($mockRepository);
        $result = $typeService->allTypes();
        $this->assertEquals($types, $result);

    }
}
