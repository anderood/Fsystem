<?php

namespace App\Repositories\Controls;

interface ControlRepositoryInterface
{
    public function getAllControls();
    public function getControlById($id);
    public function getControlByName(string $name);
    public function createControl(array $data);
}
