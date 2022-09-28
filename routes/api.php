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


Route::get('news', 'Api\NewsController@news');
Route::get('news/{id}', 'Api\NewsController@newsById');
Route::middleware('auth:api')->post('news', 'Api\NewsController@newsStore');
Route::middleware('auth:api')->put('news/{news}', 'Api\NewsController@newsUpdate');
Route::middleware('auth:api')->delete('news/{news}', 'Api\NewsController@newsDestroy');

Route::get('categories', 'Api\CategoriesController@categories');
Route::get('categories/{id}', 'Api\CategoriesController@categoriesById');
Route::middleware('auth:api')->post('categories', 'Api\CategoriesController@categoriesStore');
Route::middleware('auth:api')->put('categories/{category}', 'Api\CategoriesController@categoriesUpdate');
Route::middleware('auth:api')->delete('categories/{category}', 'Api\CategoriesController@categoriesDestroy');

Route::post('auth/register', 'Api\AuthController@register');