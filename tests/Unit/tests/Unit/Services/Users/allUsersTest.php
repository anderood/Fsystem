<?php

namespace Tests\Unit\tests\Unit\Services\Users;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserService;
use Mockery;
use PHPUnit\Framework\TestCase;

class allUsersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_allUsers_empty()
    {
        $userRepository = Mockery::mock(UserRepositoryInterface::class);
        $userRepository->shouldReceive('allUsers')->andReturn([]);

        $userService = new UserService($userRepository);
        $return = $userService->allUsers();

        $this->assertEquals([], $return);

    }

    public function test_allUsers()
    {
        $userRepository = Mockery::mock(UserRepositoryInterface::class);

        $userRequest = [
            'name' => 'Name',
            'phone' => 'phone',
            'dateOfBirth' => '2020-01-01',
            'observations' => 'observations',
            'email' => 'email@email.com',
            'password' => 'Qwert1234'
        ];
        $userRepository->shouldReceive('allUsers')->andReturn($userRequest);

        $userService = new UserService($userRepository);
        $return = $userService->allUsers();

        $this->assertEquals($userRequest, $return);

    }
}
