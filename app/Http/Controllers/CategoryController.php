<?php


namespace App\Http\Controllers;


use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return CategoryResource::collection($categories);
    }
}
