<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;

interface CategoryControllerInterface
{
    public function index();
    public function show();
    public function createCategory(Request $request);
    public function edit($id);
    public function update($id, Request $request);
}
