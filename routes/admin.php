<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SphereController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('admin.home');

# Сферы
Route::resource('spheres',SphereController::class)
    ->names([
        'index' => 'admin.sphere.index',
        'show' => 'admin.sphere.show',
        'create' => 'admin.sphere.create',
        'store' => 'admin.sphere.store',
        'edit' => 'admin.sphere.edit',
        'update' => 'admin.sphere.update',
        'destroy' => 'admin.sphere.destroy',
    ]);

# Категории
Route::resource('categories', CategoryController::class)
    ->names([
        'index' => 'admin.category.index',
        'show' => 'admin.category.show',
        'create' => 'admin.category.create',
        'store' => 'admin.category.store',
        'edit' => 'admin.category.edit',
        'update' => 'admin.category.update',
        'destroy' => 'admin.category.destroy',
    ]);

# Услуги
Route::resource('services', ServiceController::class)
    ->names([
        'index' => 'admin.service.index',
        'show' => 'admin.service.show',
        'create' => 'admin.service.create',
        'store' => 'admin.service.store',
        'edit' => 'admin.service.edit',
        'update' => 'admin.service.update',
        'destroy' => 'admin.service.destroy',
    ]);

Auth::routes();
