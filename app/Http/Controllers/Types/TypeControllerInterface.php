<?php

namespace App\Http\Controllers\Types;

interface TypeControllerInterface
{
    public function index();
    public function create();
    public function store();
    public function show();
    public function edit();
    public function update();
    public function destroy();
}