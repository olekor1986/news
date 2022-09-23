<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function categories()
    {
        $categories = Category::get();
        return response()->json($categories->load('news'), 200);
    }

    public function categoriesById($id)
    {
        return response()->json(Category::find($id)->load('news'), 200);
    }

    public function categoriesStore(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function categoriesUpdate(Request $request, Category $category)
    {
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function categoriesDestroy(Category $category)
    {
        $category->delete();
        return response()->json('', 204); 
    }
}
