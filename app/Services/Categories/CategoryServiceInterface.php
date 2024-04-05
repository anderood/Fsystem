<?php

namespace App\Services\Categories;

interface CategoryServiceInterface
{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory(Array $categoryData);
}
