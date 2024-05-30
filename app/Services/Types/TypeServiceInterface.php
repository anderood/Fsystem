<?php

namespace App\Services\Types;

interface TypeServiceInterface
{
    public function getAllTypes();
    public function getTypeId($id);
    public function createType(Array $typeData);
    public function updateService(int $id, Array $typeData);
}
