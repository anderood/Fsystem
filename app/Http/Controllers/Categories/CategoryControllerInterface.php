<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;

interface CategoryControllerInterface
{
    public function index();
    public function show();
    public function getCategoryById($id);
    public function createCategory(Request $request);
}
