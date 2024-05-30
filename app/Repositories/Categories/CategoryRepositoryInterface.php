<?php

namespace App\Repositories\Categories;

use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory(Request $request);
    public function updateCategory(int $id, Array $categoryData);
}
