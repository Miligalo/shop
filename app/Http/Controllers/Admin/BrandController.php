<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\BrandStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Repository\Brand\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct(private BrandRepository $brandRepository)
    {
    }
    public function index()
    {
        $brands = Brand::all();
        return view('admin.main.brand.index', compact('brands'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.main.brand.add-brand', compact('categories'));
    }

    public function store(BrandStoreRequest $request)
    {
        $data = $request->validated();
        $this->brandRepository->create($data);
        return redirect('/admin/brands');
    }

    public function edit(Brand $brand)
    {
        $categories = Category::all();
        return view('admin.main.brand.edit', compact('brand','categories'));
    }

    public function update(BrandUpdateRequest $request, Brand $brand)
    {
        $data = $request->validated();
        $this->brandRepository->update($data,$brand);
        return redirect('/admin/brands');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back();
    }
}
