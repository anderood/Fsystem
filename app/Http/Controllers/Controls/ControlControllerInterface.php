<?php

namespace App\Http\Controllers\Controls;

interface ControlControllerInterface
{
    public function getAllControls();
    public function getControlById(int $id);
    public function getControlByName(string $name);
    public function createControl(Array $controlData);
}
