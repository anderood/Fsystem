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
        $category = Category::create($categoryData);

        return Category::find($category->id);
    }
}
