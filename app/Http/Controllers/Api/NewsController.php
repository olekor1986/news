<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\News;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::get();
        return response()->json($news->load('categories'), 200);
    }

    public function newsById($id)
    {
        $news = News::find($id);
        if (is_null($news)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        return response()->json($news->load('categories'), 200);
    }

    public function newsStore(NewsRequest $request)
    {
        $news = News::create($request->all());
        return response()->json($news, 201);
    }

    public function newsUpdate(NewsRequest $request, $id)
    {
        $news = News::find($id);
        if (is_null($news)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $news->update($request->all());
        return response()->json($news, 200);
    }

    public function newsDestroy($id)
    {
        $news = News::find($id);
        if (is_null($news)){
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $news->delete();
        return response()->json('', 204); 
    }
}
