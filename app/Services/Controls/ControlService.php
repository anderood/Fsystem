<?php

namespace App\Services\Controls;

use App\Repositories\Controls\ControlRepositoryInterface;

class ControlService implements ControlServiceInterface
{
    protected ControlRepositoryInterface $controlRepository;
    public function __construct(ControlRepositoryInterface $controlRepository)
    {
        $this->controlRepository = $controlRepository;
    }

    public function getAllControls()
    {
        return $this->controlRepository->getAllControls();
    }

    public function getControlById($id)
    {
        return $this->controlRepository->getControlById($id);
    }

    public function createControl(array $controlData)
    {
        return $this->controlRepository->createControl($controlData);
    }
}
