<?php

namespace App\Repositories\Adapters\Eloquent;

interface UserRepositoryAdapterInterface
{
    public function getAll();
    public function getById($id);
}
