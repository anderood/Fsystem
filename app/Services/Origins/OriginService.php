<?php

namespace App\Services\Origins;

use App\Repositories\Origins\OriginRepositoryInterface;

class OriginService implements OriginServiceInterface
{

    protected OriginRepositoryInterface $originRepository;
    public function __construct(OriginRepositoryInterface $originRepository)
    {
        $this->originRepository = $originRepository;
    }

    public function getAllOrigins()
    {
        return $this->originRepository->getAllOrigins();
    }

    public function getOriginById($id)
    {
        $this->originRepository->getOriginById($id);
    }

    public function createOrigin(array $originData)
    {
        return $this->originRepository->createOrigin($originData);
    }
}
