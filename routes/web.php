<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class, "index"])->name('home');
Route::get('about', [PageController::class, "about"])->name('about');
Route::get('contact', [PageController::class, "contact"])->name('contact');
// ----- Blog Routes
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{id}', [BlogController::class, 'showSingleBlog'])->name('showBlog');
Route::get('addblog', [BlogController::class, "pageAddBlog"])->name('add');
Route::post('insert', [BlogController::class, 'addBlog']);
Route::get('delete/{id}', [BlogController::class, 'deleteBlog'])->name('delete');
Route::get('update/{id}', [BlogController::class, 'updateBlog'])->name('update');
// Route::post('validate', [BlogController::class, 'validateUpdateBlog']);
Route::post('validate', [BlogController::class, 'validateUpdateBlog']);
