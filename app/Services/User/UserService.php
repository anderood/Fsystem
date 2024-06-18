<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function allUsers()
    {
        return $this->userRepository->allUsers();
    }

    public function getUserById(int $id)
    {
        return $this->userRepository->getUserById($id);
    }

    public function createUser(Request $request)
    {
        return $this->userRepository->createUser($request);
    }

    public function updateUser(Request $request, int $id)
    {
        return $this->userRepository->updateUser($request, $id);
    }

    public function deleteUser(int $id)
    {
        return $this->userRepository->deleteUser($id);
    }
}
