<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'loginForm']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('articles', [\App\Http\Controllers\Blog\ArticleController::class, 'index'])->name('articles.index');
    Route::get('articles/{article}', [\App\Http\Controllers\Blog\ArticleController::class, 'show'])->name('articles.show');
});
