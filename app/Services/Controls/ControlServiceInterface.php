<?php

namespace App\Services\Controls;

interface ControlServiceInterface
{
    public function getAllControls();
    public function getControlById($id);
    public function createControl(array $controlData);
}
