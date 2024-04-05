<?php

namespace App\Services\Categories;

interface CategoryServiceInterface
{
    public function index();
    public function getAllCategories();
    public function getCategoryById();
    public function createCategory(Array $categoryData);
}
