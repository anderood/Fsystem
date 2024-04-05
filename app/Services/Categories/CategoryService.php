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

    public function getCategoryById($id)
    {
        return $this->categoryRespository->getCategoryById($id);
    }

    public function createCategory(array $categoryData)
    {
        return $this->categoryRespository->createCategory($categoryData);
    }
}
