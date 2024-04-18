<?php

namespace App\Repositories\Controls;

use App\Models\Control;

class ControlRepository implements ControlRepositoryInterface
{

    public function getAllControls()
    {
        return Control::all();
    }

    public function getControlById($id)
    {
        return Control::findById($id);
    }

    public function getControlByName(string $name)
    {
        // TODO: Implement getControlByName() method.
    }

    public function createControl(array $controlData)
    {
        return Control::create($controlData);
    }
}
