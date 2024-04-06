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
        return Types::find($id);
    }

    public function createType(array $typeData)
    {
        return Types::create($typeData);
    }
}
