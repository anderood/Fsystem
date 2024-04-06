<?php

namespace App\Repositories\Types;

use App\Models\Types;
use App\Services\Types\TypeService;

class TypeRepository implements TypeRepositoryInterface
{

    public function getAllTypes()
    {
        return Types::all();
    }

    public function getTypeId($id)
    {
        // TODO: Implement getTypeId() method.
    }

    public function createType(array $typeData)
    {
        // TODO: Implement createType() method.
    }
}
