<?php

namespace App\Services\Controls;

interface ControlServiceInterface
{
    public function getAllControls();
    public function getControl($id);
    public function createControl(array $controlData);
}
