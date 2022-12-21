<?php

namespace App\Repository\Brand;


use App\Models\Brand;

class BrandRepository
{
    public function create($data)
    {
        return Brand::query()->firstOrCreate($data);
    }

    public function update($data, $brand)
    {
        return $brand->update($data);
    }
}
