<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Models\Category;
use App\Service\Admin\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.main.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.main.category.add-category');
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        $this->categoryService->create($data);
        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.main.category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $this->categoryService->update($data,$category);
        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
