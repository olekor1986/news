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
        $category = Category::find($id);
        if (is_null($category)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        return response()->json($category->load('news'), 200);
    }

    public function categoriesStore(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function categoriesUpdate(Request $request, $id)
    {
        $category = Category::find($id);
        if (is_null($category)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function categoriesDestroy($id)
    {
        $category = Category::find($id);
        if (is_null($category)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $category->delete();
        return response()->json('', 204); 
    }
}
