<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function news()
    {
        return response()->json(News::get(), 200);
    }

    public function newsById($id)
    {
        return response()->json(News::find($id), 200);
    }

    public function newsStore(Request $request)
    {
        $news = News::create($request->all());
        return response()->json($news, 201);
    }

    public function newsUpdate(Request $request, News $news)
    {
        $news->update($request->all());
        return response()->json($news, 200);
    }

    public function newsDestroy(News $news)
    {
        $news->delete();
        return response()->json('', 204); 
    }
}
