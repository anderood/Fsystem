<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use Mockery;
use PHPUnit\Framework\TestCase;

class allOriginsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_allOrigins()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $originsData = [
            ['id' => 1, 'origin' => 'originItem1', 'description' => 'Origin Item1'],
            ['id' => 2, 'origin' => 'originItem2', 'description' => 'Origin Item2'],
        ];

        $mockRepository->shouldReceive('allOrigins')->once()->andReturn($originsData);

        $originService = new OriginService($mockRepository);

        $result = $originService->allOrigins();

        $this->assertEquals($originsData, $result);
    }
}
