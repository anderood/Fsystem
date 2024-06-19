<?php

namespace Tests\Unit\tests\Unit\Services\Users;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class deleteUser extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_deleteUser_empty()
    {
        $mockRepository = Mockery::mock(UserRepositoryInterface::class);
        $mockRepository->shouldReceive('deleteUser')->with(1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $transactionService = new UserService($mockRepository);

        $transactionService->deleteUser(1);
    }

    public function test_deleteUser()
    {
        $mockRepository = Mockery::mock(UserRepositoryInterface::class);
        $mockRepository->shouldReceive('deleteUser')->with(1)->andReturn([]);

        $transactionService = new UserService($mockRepository);

        $return = $transactionService->deleteUser(1);

        $this->assertEquals([], $return);
    }
}
