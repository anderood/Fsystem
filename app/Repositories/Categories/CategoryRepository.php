<?php

namespace App\Repositories\Categories;

use App\Models\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById()
    {
        // TODO: Implement getCategoryById() method.
    }

    public function createCategory(array $categoryData)
    {
        // TODO: Implement createCategory() method.
    }
}
