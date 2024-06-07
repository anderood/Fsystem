<?php

namespace Tests\Unit\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;

use App\Services\Type\TypeService;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class getTypeByIdTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getTypeById_empty()
    {
        $mockRepository = Mockery::mock(TypeRepositoryInterface::class);
        $mockRepository->shouldReceive('getTypeById')->with(0)->andThrow(InvalidArgumentException::class);

        $typeService = new TypeService($mockRepository);

        $this->expectException(InvalidArgumentException::class);

        $typeService->getTypeById(0);

    }
}
