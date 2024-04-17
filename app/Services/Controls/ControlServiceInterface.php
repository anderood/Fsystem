<?php

namespace App\Services\Controls;

interface ControlServiceInterface
{
    public function getAllControls();
    public function getControl($id);

    public function getControlByName(string $name);
    public function createControl(array $data);
}
