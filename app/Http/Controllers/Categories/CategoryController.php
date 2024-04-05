<?php

namespace App\Http\Controllers\Categories;

use App\Services\Categories\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController implements CategoryControllerInterface
{
    protected CategoryServiceInterface $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $allCategories = $this->categoryService->getAllCategories();
        return view('categories.list_categories', ['categories' => $allCategories]);
    }

    public function show()
    {
        return view('categories.create_category');
    }

    public function createCategory(Request $request)
    {
        $newCategory = $request->all();
        return $this->categoryService->createCategory($newCategory);
    }

    public function getCategoryById($id)
    {
        return $this->categoryService->getCategoryById($id);
    }
}
