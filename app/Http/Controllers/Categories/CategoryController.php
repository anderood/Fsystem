<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
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

    public function show($id)
    {
        return view('categories.create_category');
    }

    public function createCategory(Request $request)
    {
        // TODO: Implement createCategory() method.
    }
}
