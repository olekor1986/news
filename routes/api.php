<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('news', 'NewsController@news');
Route::get('news/{id}', 'NewsController@newsById');
Route::post('news', 'NewsController@newsStore');
Route::put('news/{news}', 'NewsController@newsUpdate');
Route::delete('news/{news}', 'NewsController@newsDestroy');

Route::get('categories', 'CategoriesController@categories');
Route::get('categories/{id}', 'CategoriesController@categoriesById');
Route::post('categories', 'CategoriesController@categoriesStore');
Route::put('categories/{category}', 'CategoriesController@categoriesUpdate');
Route::delete('categories/{category}', 'CategoriesController@categoriesDestroy');
