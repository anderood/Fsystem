<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryById();
    public function createCategory(Array $categoryData);
}
