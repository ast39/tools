<?php

use App\Http\Controllers\Admin\SphereController;
use App\Http\Controllers\Admin\HomeController;
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
