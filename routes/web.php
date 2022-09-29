<?php

use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('beranda', [HomeController::class, 'index'])->name('user.home');
Route::get('artikel', [ArticleController::class, 'index'])->name('user.article');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
