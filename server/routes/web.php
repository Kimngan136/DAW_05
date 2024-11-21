<?php

use Illuminate\Support\Facades\Route;

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

    // Product route
    Route::prefix('product')->middleware('role:1,2')->group(function () {
        Route::name('product.')->group(function () {
            Route::get('search', [ProductController::class, 'search'])->name('search');
            Route::get('list', [ProductController::class, 'getList'])->name('list');
            Route::get('detail/{id}', [ProductController::class, 'getProductDetail'])->name('detail');
            Route::get('add-new', [ProductController::class, 'addNew'])->name('add-new');
            Route::post('add-new', [ProductController::class, 'hdAddNew'])->name('hd-add-new');
            Route::get('update/{id}', [ProductController::class, 'upDate'])->name('update');
            Route::post('update/{id}', [ProductController::class, 'hdUpdate'])->name('hd-update');
            Route::get('restore/{id}', [ProductController::class, 'restore'])->name('restore');
            Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
            Route::get('update-images/{id}', [ProductController::class, 'updateImg'])->name('update-images');
            Route::post('update-images/{id}', [ProductController::class, 'hdUpdateImg'])->name('hd-update-images');
            Route::delete('delete-image/{image}', [ProductController::class, 'deleteImage'])->name('delete-image');
            Route::get('edit-image/{image}', [ProductController::class, 'editImage'])->name('edit-image');
            Route::post('add-detail/{id}', [ProductController::class, 'addDetail'])->name('add-detail');
            Route::delete('delete-detail/{id}', [ProductController::class, 'deleteDetail'])->name('delete-detail');
            Route::put('update-color/{id}', [ProductController::class, 'updateImage'])->name('update-color');
        });
    });
});
