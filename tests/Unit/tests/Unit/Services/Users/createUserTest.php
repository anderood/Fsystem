<?php

namespace Tests\Unit\tests\Unit\Services\Users;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class createUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_createUser_empty()
    {
        $userRepository = \Mockery::mock(UserRepositoryInterface::class);
        $request = Request::create('/users/create', 'POST', []);
        $userRepository->shouldReceive('createUser')->with($request)->andThrow(InvalidArgumentException::class);

        $this->expectException(InvalidArgumentException::class);

        $userService = new UserService($userRepository);

        $userService->createUser($request);

    }

    public function test_createUser()
    {
        $userRepository = \Mockery::mock(UserRepositoryInterface::class);

        $userRequest = [
            'name' => 'Name',
            'phone' => 'phone',
            'dateOfBirth' => '2020-01-01',
            'observations' => 'observations',
            'email' => 'email@email.com',
            'password' => 'Qwert1234'
        ];

        $request = Request::create('/users/create', 'POST', $userRequest);
        $userRepository->shouldReceive('createUser')->with($request)->andReturn($userRequest);

        $userService = new UserService($userRepository);

        $user = $userService->createUser($request);

        $this->assertEquals($userRequest, $user);

    }
}
