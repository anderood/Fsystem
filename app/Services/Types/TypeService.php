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
        return $this->typeRepository->getTypeId($id);
    }

    public function createType(array $typeData)
    {
        return $this->typeRepository->createType($typeData);
    }
}
