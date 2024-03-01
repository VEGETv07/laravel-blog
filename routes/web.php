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
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('showBlog');
