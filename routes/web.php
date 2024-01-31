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
Route::get('/categories/work', [CategoriesController::class, 'work'])->name('Work & Productivity');
Route::get('/categories/engineering', [CategoriesController::class, 'engg'])->name('Engineering & Development');
Route::get('/categories/design', [CategoriesController::class, 'design'])->name('Design & Creative');
Route::get('/categories/social', [CategoriesController::class, 'social'])->name('Social and Community');
Route::get('/categories/finance', [CategoriesController::class, 'finance'])->name('Finance');