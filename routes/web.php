<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('',[PostController::class,'index'])->name('welcome');
Route::get('/posts/{id}',[PostController::class,'show'])->name('post.show');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post/store',[PostController::class,'store'])->name('post.store');
