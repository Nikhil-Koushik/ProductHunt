<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
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
Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/categories/work', [CategoriesController::class, 'work'])->name('work');
Route::get('/categories/engineering', [CategoriesController::class, 'engg'])->name('engg');
Route::get('/categories/design', [CategoriesController::class, 'design'])->name('design');
Route::get('/categories/social', [CategoriesController::class, 'social'])->name('social');
Route::get('/categories/finance', [CategoriesController::class, 'finance'])->name('finance');