<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return mixed
     */
    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function createUser($userData)
    {
        return $this->userRepository->createUser($userData);
    }
}
