<?php

namespace App\Service\Admin;

class BrandService
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
    }

    public function create($data)
    {
        return $this->categoryRepository->create($data);
    }

    public function update($data, $category)
    {
        $data = array_diff($data, array('', NULL, false));
        $this->categoryRepository->update($data, $category);
    }
}
