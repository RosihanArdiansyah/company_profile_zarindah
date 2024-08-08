<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\unitController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article', [HomeController::class, 'article'])->name('article');
// Route::get('/products', [unitController::class, 'index'])->name('products');
Route::get('/product/{slug}', [unitController::class, 'show'])->name('product');
Route::get('/article/{slug}', [articleController::class, 'show'])->name('article.content');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
