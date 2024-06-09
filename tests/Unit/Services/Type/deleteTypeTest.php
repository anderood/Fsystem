<?php

namespace Tests\Unit\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;
use App\Services\Type\TypeService;
use Mockery;
use PHPUnit\Framework\TestCase;

class deleteTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_deleteType()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $typeId = 1;
        $mockRepository->shouldReceive('deleteType')->with($typeId)->andReturn([]);

        $typeService = new TypeService($mockRepository);
        $result = $typeService->deleteType($typeId);
        $this->assertEquals([], $result);
    }
}
