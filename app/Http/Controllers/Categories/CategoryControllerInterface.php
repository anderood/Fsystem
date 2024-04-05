<?php

namespace App\Http\Controllers\Categories;

interface CategoryControllerInterface
{
    public function index();
    public function show();
    public function createCategory(Array $categoryData);
}
