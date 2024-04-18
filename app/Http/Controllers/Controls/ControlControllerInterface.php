<?php

namespace App\Http\Controllers\Controls;

interface ControlControllerInterface
{
    public function getAllControls();
    public function getControlById(int $id);
    public function createControl(Array $controlData);
}
