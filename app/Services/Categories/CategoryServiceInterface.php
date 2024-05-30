<?php

namespace App\Services\Categories;

use Illuminate\Http\Request;

interface CategoryServiceInterface
{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory(Request $request);
    public function updateCategory(int $id, Array $categoryData);
}
