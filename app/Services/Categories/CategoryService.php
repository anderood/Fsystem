<?php

namespace App\Services\Categories;

use App\Repositories\Categories\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{
    protected CategoryRepositoryInterface $categoryRespository;
    public function __construct(CategoryRepositoryInterface $categoryRespository)
    {
        $this->categoryRespository = $categoryRespository;
    }

    public function getAllCategories()
    {
        return $this->categoryRespository->getAllCategories();
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
