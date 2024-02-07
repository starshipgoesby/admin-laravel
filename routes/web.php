<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PostController::class,'post']);
Route::get('/addPost', [PostController::class,'addPost']);
Route::post('/storePost', [PostController::class,'storePost']);
Route::get('/EditPost/{post_id}', [PostController::class,'editPost']);
Route::get('/DeletePost/{post_id}', [PostController::class,'destroy']);


Route::get('/category', [CategoryController::class,'category']);
Route::get('/addCategory', [CategoryController::class,'addCategory']);