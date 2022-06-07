<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\article;
use App\Http\Controllers\categorie;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles', [article::class, 'getAll']);
Route::get('articles/{id}', [article::class, 'getById']);
Route::post('articles', [article::class, 'store']);
Route::put('articles/{id}', [article::class, 'update']);
Route::delete('articles/{id}', [article::class, 'delete']);

Route::get('categories', [categorie::class, 'getAll']);
Route::get('categories/{id}', [categorie::class, 'getById']);
Route::post('categories', [categorie::class, 'store']);
Route::put('categories/{id}', [categorie::class, 'update']);
Route::delete('categories/{id}', [categorie::class, 'delete']);
