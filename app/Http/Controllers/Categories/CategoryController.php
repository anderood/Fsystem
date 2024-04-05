<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Services\Categories\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController implements CategoryControllerInterface
{

    public function index()
    {
        return view('categories.list_categories');
    }

    public function show()
    {
        return view('categories.create_category');
    }

    public function createCategory(array $categoryData)
    {
        // TODO: Implement createCategory() method.
    }
}
