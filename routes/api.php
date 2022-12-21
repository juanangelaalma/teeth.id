<?php

use App\Http\Controllers\Api\CitiesController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\User\FeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/cities')->group(function() {
    Route::get('/', [CitiesController::class, 'cities']);
    Route::get('/search', [CitiesController::class, 'searchCities']);
});

Route::get('/schedule_hours/{day}/{clinic_id}', [ScheduleController::class, 'getByDay']);

Route::post('feedback', [FeedbackController::class, 'create']);