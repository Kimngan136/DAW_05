<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CapacityColorController;

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
    Route::prefix('brand')->middleware('role:1,2')->group(function () {
        Route::name('brand.')->group(function () {
            Route::get('search', [BrandController::class, 'search'])->name('search');
            Route::get('list', [BrandController::class, 'getList'])->name('list');
            Route::get('add-new', [BrandController::class, 'addNew'])->name('add-new');
            Route::post('add-new', [BrandController::class, 'hdAddNew'])->name('hd-add-new');
            Route::get('update/{id}', [BrandController::class, 'upDate'])->name('update');
            Route::post('update/{id}', [BrandController::class, 'hdUpdate'])->name('hd-update');
            Route::get('restore/{id}', [BrandController::class, 'restore'])->name('restore');
            Route::get('delete/{id}', [BrandController::class, 'delete'])->name('delete');
        });
    });
    Route::prefix('color')->middleware('role:1,2')->group(function () {
        Route::name('color.')->group(function () {
            Route::get('list', [CapacityColorController::class, 'getListColor'])->name('list');
            Route::post('add-new', [CapacityColorController::class, 'hdAddNewColor'])->name('hd-add-new');
            Route::get('delete/{id}', [CapacityColorController::class, 'deleteColor'])->name('delete');
        });
    });
    Route::prefix('capacity')->middleware('role:1,2')->group(function () {
        Route::name('capacity.')->group(function () {
            Route::get('list', [CapacityColorController::class, 'getListCapacity'])->name('list');
            Route::post('add-new', [CapacityColorController::class, 'hdAddNewCapacity'])->name('hd-add-new');
            Route::get('delete/{id}', [CapacityColorController::class, 'deleteCapacity'])->name('delete');
        });
    });

    // route khac
});
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'Login'])->name('login');
    Route::post('/', [LoginController::class, 'hdLogin'])->name('hd-login');
    Route::get('password-reset', [LoginController::class, 'passWordReset'])->name('password-reset');
    Route::post('password-reset', [LoginController::class, 'hdPasswordReset'])->name('hd-password-reset');
});