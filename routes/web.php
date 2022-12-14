<?php

use App\Http\Controllers\Admin\AdminDocumentController;
use App\Http\Controllers\BuatJanjiController;
use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\DoctorArticleController;
use App\Http\Controllers\Doctor\DoctorClinicController;
use App\Http\Controllers\Doctor\DoctorDocumentController;
use App\Http\Controllers\Doctor\DoctorOrderController;
use App\Http\Controllers\Doctor\DoctorSettingController;
use App\Http\Controllers\MediaUploadController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\ForumController;
use App\Http\Controllers\User\HomeController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('beranda', [HomeController::class, 'index'])->name('user.home');
Route::prefix('pesanan')->group(function() {
    Route::get('/', [PesananController::class, 'index'])->name('user.pesanan.index');
    Route::get('/{order:id}/cetak-invoice', [PesananController::class, 'cetak_invoice'])->name('user.pesanan.cetak_invoice');
});

Route::prefix('/buat-janji')->group(function() {
    Route::get('/', [BuatJanjiController::class, 'index'])->name('buat_janji.index');
    Route::get('/{user_id}/pilih-jadwal', [BuatJanjiController::class, 'pilih_jadwal'])->middleware('auth')->name('buat_janji.pilih_jadwal');
    Route::post('/{user_id}/post-pilih-jadwal', [BuatJanjiController::class, 'post_pilih_jadwal'])->middleware('auth')->name('buat_janji.post_pilih_jadwal');
    Route::get('/ringkasan-pesanan', [BuatJanjiController::class, 'ringkasan_pesanan'])->middleware('auth')->name('buat_janji.ringkasan_pesanan');
    Route::post('/bayar-pesanan', [BuatJanjiController::class, 'bayar_pesanan'])->middleware('auth')->name('buat_janji.bayar_pesanan');
    Route::get('/search', [BuatJanjiController::class, 'search'])->name('buat_janji.search');
});

Route::prefix('/forum')->group(function () {
    Route::get('/', [ForumController::class, 'index'])->name('user.forum.index');
    Route::post('/store', [ForumController::class, 'store'])->name('user.forum.store');
    Route::get('/{slug}', [ForumController::class, 'read'])->name('user.forum.read');
    Route::post('/{slug}/answer', [ForumController::class, 'answer'])->name('user.forum.answer');
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

    Route::prefix('settings')->group(function() {
        Route::get('/profile', [DoctorSettingController::class, 'profile'])->name('doctor.setting.profile');
        Route::get('/personal_data', [DoctorSettingController::class, 'personal_data'])->name('doctor.setting.personal_data');
        Route::get('/clinic', [DoctorSettingController::class, 'clinic'])->name('doctor.setting.clinic');

        Route::put('/profile/{user:id}/update', [DoctorSettingController::class, 'update_profile'])->name('doctor.setting.profile.update');
        Route::put('/personal_data/{user:id}/update', [DoctorSettingController::class, 'update_personal_data'])->name('doctor.setting.personal_data.update');
        Route::put('/clinic/{clinic_id}/update', [DoctorSettingController::class, 'update_clinic'])->name('doctor.setting.clinic_update');
    });

    Route::prefix('order')->group(function() {
        Route::get('/', [DoctorOrderController::class, 'index'])->name('doctor.order.index');
        Route::post('/{order:id}/asdone', [DoctorOrderController::class, 'done'])->name('doctor.order.asdone');
    });
    
    Route::prefix('clinic')->group(function() {
        Route::get('/', [DoctorClinicController::class, 'index'])->name('doctor.clinic.index');
        Route::post('/create_clinic_schedule', [DoctorClinicController::class, 'create_clinic_schedule'])->name('doctor.clinic.create_clinic_schedule');
        Route::delete('/{clinic_schedule_id}/delete_clinic_schedule', [DoctorClinicController::class, 'delete_clinic_schedule'])->name('doctor.clinic.delete_clinic_schedule');
        Route::delete('/{schedule_hour_id}/delete_schedule_hour', [DoctorClinicController::class, 'delete_schedule_hour'])->name('doctor.clinic.delete_schedule_hour');
    });
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('documents', [AdminDocumentController::class, 'index'])->name('admin.documents.index');
    Route::post('documents/{certification:id}/reject', [AdminDocumentController::class, 'reject'])->name('admin.documents.reject');
    Route::post('documents/{certification:id}/approve', [AdminDocumentController::class, 'approve'])->name('admin.documents.approve');

    Route::get('dashboard', function() {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
});

Route::post('upload', [MediaUploadController::class, 'upload']);

require __DIR__.'/auth.php';
