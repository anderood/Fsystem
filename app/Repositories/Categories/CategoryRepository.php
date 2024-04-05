<?php

namespace App\Repositories\Categories;

use App\Models\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    public function createCategory(array $categoryData)
    {
        $category = Category::create($categoryData);

        return Category::find($category->id);
    }
}
