<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware('admin.auth')->group(function () {
    Route::get('/', [MainController::class, 'index'])
        ->name('admin');

    Route::prefix('news')->group(function() {
        Route::get('index', [NewsController::class, 'index'])->name('admin.news');
        Route::get('create', [NewsController::class, 'create'])->name('admin.news.create');
    });
});


Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'index'])
        ->name('admin.login');

    Route::post('login', [LoginController::class, 'store'])
        ->name('admin.login.store');
});
