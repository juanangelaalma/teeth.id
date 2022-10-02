<?php

use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\DoctorArticleController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\HomeController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('beranda', [HomeController::class, 'index'])->name('user.home');

Route::prefix('artikel')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('user.articles.index');
    Route::get('/search', [ArticleController::class, 'search'])->name('user.articles.search');
    Route::post('/search', function() {
        return redirect('artikel/search?keyword=' . request()->keyword);
    });
    Route::get('/{slug}', [ArticleController::class, 'show'])->name('user.articles.show');
});


Route::prefix('doctor')->middleware(['auth', 'doctor'])->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('doctor.dashboard');

    Route::prefix('artikel')->group(function() {
        Route::get('/', [DoctorArticleController::class, 'index'])->name('doctor.articles.index');
    });
});

require __DIR__.'/auth.php';
