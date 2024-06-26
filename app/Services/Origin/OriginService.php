<?php

namespace App\Services\Origin;

use App\Repositories\Origin\OriginRepositoryInterface;
use Illuminate\Http\Request;

class OriginService implements OriginServiceInterface
{
    private $originRepository;

    public function __construct(OriginRepositoryInterface $originRepository)
    {
        $this->originRepository = $originRepository;
    }

    public function allOrigins()
    {
        return $this->originRepository->allOrigins();
    }

    public function getOriginById(int $id)
    {
        return $this->originRepository->getOriginById($id);
    }

    public function createOrigin(Request $request)
    {
        return $this->originRepository->createOrigin($request);
    }

    public function updateOrigin(Request $request, int $id)
    {
        return $this->originRepository->updateOrigin($request, $id);
    }

    public function deleteOrigin(int $id)
    {
        return $this->originRepository->deleteOrigin($id);
    }

    public function findOrigin(string $search)
    {
        return $this->originRepository->findOrigin($search);
    }
}
