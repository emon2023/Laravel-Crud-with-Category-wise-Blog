<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;



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


Route::get('/',[HomeController::class,'index'])->name('view.home');
Route::get('/view/detail/{id}',[HomeController::class,'detail'])->name('view.detail');
Route::get('/view/blog-category/{id}', [HomeController::class, 'category']) ->name('view.blog-category');



Route::get('/blog/add',[BlogController::class,'index'])->name('blog.add');
Route::post('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::get('/blog/manage',[BlogController::class,'manage'])->name('blog.manage');
Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');


Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
Route::post('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
