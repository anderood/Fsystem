<?php

namespace App\Repositories\Types;

interface TypeRepositoryInterface
{
    public function getAllTypes();
    public function getTypeId($id);
    public function createType(Array $typeData);
}
