<?php


namespace App\Http\Controllers;


use App\Http\Requests\Category\CategoriesFilter;
use App\Http\Requests\Category\PostCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(CategoriesFilter $filters)
    {
        $categories = Category::filter($filters)->paginate(20);
        return CategoryResource::collection($categories);
    }

    public function store(PostCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return new CategoryResource($category);
    }
}
