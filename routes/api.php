<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Route;

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

//Api_Tutorial 
Route::controller(PostController::class)->prefix('/post')->group(function () {
    Route::get('/{id}', 'show');
    Route::get('/', 'index');
    Route::post('/','create');
    Route::delete('/{id}','delete');
    Route::put('/{id}','update');
});
 Route::controller(UserController::class)->prefix('/user')->group(function(){
    Route::get('/{id}','show');
    Route::post('/','create');
    Route::delete('/{id}','delete');
    Route::put('/{id}','update');
    Route::get('/check/{id}','check');
    Route::get('/','index');
});

