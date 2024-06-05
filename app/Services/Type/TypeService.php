<?php

namespace App\Services\Type;

use App\Repositories\Type\TypeRepositoryInterface;
use Illuminate\Http\Request;

class TypeService implements TypeServiceInterface
{
    private $typeRepository;

    public function __construct(TypeRepositoryInterface $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function allTypes()
    {
        return $this->typeRepository->allTypes();
    }

    public function getTypeById(int $id)
    {
        return $this->typeRepository->getTypeById($id);
    }

    public function createType(Request $request)
    {
        return $this->typeRepository->createType($request);
    }

    public function updateType(Request $request, int $id)
    {
        return $this->typeRepository->updateType($request, $id);
    }

    public function deleteType(int $id)
    {
        return $this->typeRepository->deleteType($id);
    }
}
