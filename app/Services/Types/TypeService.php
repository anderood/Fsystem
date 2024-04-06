<?php

namespace App\Services\Types;

use App\Repositories\Types\TypeRepositoryInterface;

class TypeService implements TypeServiceInterface
{

    protected TypeRepositoryInterface $typeRepository;
    public function __construct(TypeRepositoryInterface $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function getAllTypes()
    {
        return $this->typeRepository->getAllTypes();
    }

    public function getTypeId($id)
    {
        // TODO: Implement getTypeId() method.
    }

    public function createType(array $typeData)
    {
        return $this->typeRepository->createType($typeData);
    }
}
