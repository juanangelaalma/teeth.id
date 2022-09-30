<?php

use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\HomeController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('beranda', [HomeController::class, 'index'])->name('user.home');

Route::controller(ArticleController::class)->prefix('artikel')->name('user.articles.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/search', 'search')->name('search');
    Route::post('/search', function() {
        return redirect('artikel/search?keyword=' . request()->keyword);
    });
    Route::get('/{slug}', 'show')->name('show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
