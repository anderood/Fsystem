<?php

namespace Tests\Unit\Services\Origins;

use App\Repositories\Origin\OriginRepositoryInterface;
use App\Services\Origin\OriginService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class deleteOriginTest extends TestCase
{

    public function test_deleteOrigin()
    {
        $mockRepository = Mockery::mock(OriginRepositoryInterface::class);
        $originData = ['id' => 1, 'name' => 'originDelete', 'description' => 'descriptionDelete'];
        $request = Request::create("origins/1/delete", "DELETE", $originData);

        $mockRepository->shouldReceive('deleteOrigin')
            ->once()
            ->with(1)
            ->andReturn([]);

        $originService = new OriginService($mockRepository);

        $result = $originService->deleteOrigin(1);

        $this->assertEquals([], $result);

    }
}
