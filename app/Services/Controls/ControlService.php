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

    public function getControl($id)
    {
        // TODO: Implement getControl() method.
    }

    public function createControl(array $controlData)
    {
        // TODO: Implement createControl() method.
    }
}
