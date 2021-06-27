<?php

use App\Http\Controllers\Api\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login',[SessionController::class,'create']);
//Route::post('sessions',[SessionController::class,'login']);
//
//Route::post('logout',[SessionController::class,'destroy']);
