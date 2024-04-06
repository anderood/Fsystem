<?php

namespace App\Services\Origins;

interface OriginServiceInterface
{
    public function getAllOrigins();
    public function getOriginById($id);
}
