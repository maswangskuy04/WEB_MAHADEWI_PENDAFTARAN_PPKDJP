<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::prefix('admin/')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('levels', [LevelsController::class, 'index']);
    Route::get('jurusan', [LevelsController::class, 'index']);
});
