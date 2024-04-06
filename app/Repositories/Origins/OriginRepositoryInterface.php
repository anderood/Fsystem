<?php

namespace App\Repositories\Origins;

interface OriginRepositoryInterface
{
    public function getAllOrigins();
    public function getOriginById($id);
    public function createOrigin(Array $originData);
}
