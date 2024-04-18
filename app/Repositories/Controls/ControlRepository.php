<?php

namespace App\Repositories\Controls;

class ControlRepository implements ControlRepositoryInterface
{

    public function getAllControls()
    {
        return Controll::all();
    }

    public function getControlById($id)
    {
        // TODO: Implement getControlById() method.
    }

    public function getControlByName(string $name)
    {
        // TODO: Implement getControlByName() method.
    }

    public function createControl(array $data)
    {
        // TODO: Implement createControl() method.
    }
}
