<?php

use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\DoctorArticleController;
use App\Http\Controllers\Doctor\DoctorDocumentController;
use App\Http\Controllers\MediaUploadController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\ForumController;
use App\Http\Controllers\User\HomeController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('beranda', [HomeController::class, 'index'])->name('user.home');

Route::prefix('/forum')->group(function () {
    Route::get('/', [ForumController::class, 'index'])->name('user.forum.index');
    Route::get('/create', [ForumController::class, 'create'])->name('user.forum.create');
    Route::post('/post', [ForumController::class, 'post'])->name('user.forum.post');
    Route::get('/{slug}', [ForumController::class, 'read'])->name('user.forum.read');
});

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
        Route::get('/create', [DoctorArticleController::class, 'create'])->name('doctor.articles.create');
        Route::post('/store', [DoctorArticleController::class, 'store'])->name('doctor.articles.store');
        Route::get('/{article:id}/edit', [DoctorArticleController::class, 'edit'])->name('doctor.articles.edit');
        Route::post('/{article:id}/update', [DoctorArticleController::class, 'update'])->name('doctor.articles.update');
        Route::get('/{article:id}/delete', [DoctorArticleController::class, 'destroy'])->name('doctor.articles.destroy');
    });

    Route::prefix('dokumen')->group(function() {
        Route::get('/', [DoctorDocumentController::class, 'index'])->name('doctor.documents.index');
        Route::post('/create', [DoctorDocumentController::class, 'create'])->name('doctor.documents.create');
    });
});

Route::post('upload', [MediaUploadController::class, 'upload']);

require __DIR__.'/auth.php';
