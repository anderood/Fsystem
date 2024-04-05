<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory(Array $categoryData);
}
