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

    public function updateCategory(int $id, array $categoryData)
    {
        $category = Category::findOrFail($id);

        $category->update($categoryData);

        $category->save();

        return redirect()->route('categories.update', ['id' => $id])->with('success', 'Categoria atualizada com Sucesso!');
    }
}
