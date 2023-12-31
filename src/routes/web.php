<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::patch('/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/articles', ArticleController::class);
});