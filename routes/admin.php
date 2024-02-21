<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('admin.home');

Route::group(['prefix' => 'categories'], function () {

    # Категории
    Route::resource('program',CategoryController::class)
        ->names([
            'index' => 'admin.category.index',
            'show' => 'admin.category.show',
            'create' => 'admin.category.create',
            'store' => 'admin.category.store',
            'edit' => 'admin.category.edit',
            'update' => 'admin.category.update',
            'destroy' => 'admin.category.destroy',
        ]);
});
