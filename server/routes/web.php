<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideShowController;

use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'check.status'])->group(function () {
    Route::prefix('admin')->middleware('role:1')->group(function () {
        Route::name('admin.')->group(function () {
            Route::get('add-new', [AdminController::class, 'addNew'])->name('add-new');
            Route::post('add-new', [AdminController::class, 'hdAddNew'])->name('hd-add-new');
            Route::get('list', [AdminController::class, 'getList'])->name('list');
            Route::get('search', [AdminController::class, 'search'])->name('search');
            Route::get('update/{id}', [AdminController::class, 'upDate'])->name('update');
            Route::put('update/{id}', [AdminController::class, 'hdUpdate'])->name('hd-update');
            Route::get('lock/{id}', [AdminController::class, 'lock'])->name('lock');
            Route::get('unlock/{id}', [AdminController::class, 'unlock'])->name('unlock');
            Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
            Route::get('info', [AdminController::class, 'inFo'])->name('info');
            Route::post('info', [AdminController::class, 'updateInfo'])->name('update-info');
            Route::get('reset-password', [AdminController::class, 'resetPassword'])->name('reset-password');
            Route::post('reset-password', [AdminController::class, 'hdResetPassword'])->name('hd-reset-password');
        });

    });

    // route khac
});