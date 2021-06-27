<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/user')->group(function() {
    Route::post('/login',[SessionController::class,'login']);
    Route::post('/register', [SessionController::class,'register']);
    Route::get('/articles/all',[ArticleController::class,'index']);
    Route::apiResource('articles', ArticleController::class)->middleware('auth:api');
    Route::apiResource('comments', CommentController::class)->middleware('auth:api');
});
