<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PromotionController::class,'index']);

Route::get('add',[PromotionController::class,'create']);
Route::post('add',[PromotionController::class,'store']);

Route::get('edit/{id}',[PromotionController::class,'edit']);
Route::post('update/{id}',[PromotionController::class,'update']);

// Route::resource('update/{id}',[PromotionController::class,'update']);

Route::get('delete/{id}',[PromotionController::class,'destroy']);

Route::get('search',[PromotionController::class,'search']);