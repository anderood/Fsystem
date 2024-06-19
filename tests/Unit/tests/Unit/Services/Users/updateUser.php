<?php

namespace Tests\Unit\tests\Unit\Services\Users;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

class updateUser extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_updateUser_empty()
    {
        $mockRepository = Mockery::mock(UserRepositoryInterface::class);

        $request = Request::create("/users/1/update", "PUT", ['id' => '', 'name' => '', 'description' => '']);
        $mockRepository->shouldReceive("updateUser")->with($request, 1)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $movement = new UserService($mockRepository);
        $movement->updateUser($request, 1);
    }

    public function test_updateUser()
    {
        $mockRepository = Mockery::mock(UserRepositoryInterface::class);

        $userUpdate = ['id' => '1', 'name' => 'nome', 'description' => 'description'];
        $request = Request::create("/users/1/update", "PUT", );
        $mockRepository->shouldReceive("updateUser")->with($request, 1)->andReturn($userUpdate);

        $movement = new UserService($mockRepository);
        $return = $movement->updateUser($request, 1);

        $this->assertEquals($userUpdate, $return);
    }
}
