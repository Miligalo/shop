<?php

namespace App\Repository\Category;

use App\Models\Category;

class CategoryRepository
{
    public function create($data)
    {
       return Category::query()->firstOrCreate($data);
    }

    public function update($data, $category)
    {
      return $category->update($data);
    }
}
