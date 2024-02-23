<?php

use App\Http\Controllers\Web\ApartmentController;
use App\Http\Controllers\Web\CarpenterController;
use App\Http\Controllers\Web\ElectricianController;
use App\Http\Controllers\Web\FurnitureController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\HusbandController;
use App\Http\Controllers\Web\PlumberController;
use App\Http\Controllers\Web\TechnicalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('web.home');

Route::get('electrician', [ElectricianController::class, 'index'])->name('web.electrician.index');
Route::get('electrician/{id}', [ElectricianController::class, 'show'])->name('web.electrician.show');

Route::get('plumber', [PlumberController::class, 'index'])->name('web.plumber.index');
Route::get('plumber/{id}', [PlumberController::class, 'show'])->name('web.plumber.show');

Route::get('husband', [HusbandController::class, 'index'])->name('web.husband.index');
Route::get('husband/{id}', [HusbandController::class, 'show'])->name('web.husband.show');

Route::get('technical', [TechnicalController::class, 'index'])->name('web.technical.index');
Route::get('technical/{id}', [TechnicalController::class, 'show'])->name('web.technical.show');

Route::get('furniture', [FurnitureController::class, 'index'])->name('web.furniture.index');
Route::get('furniture/{id}', [FurnitureController::class, 'show'])->name('web.furniture.show');

Route::get('apartment', [ApartmentController::class, 'index'])->name('web.apartment.index');
Route::get('apartment/{id}', [ApartmentController::class, 'show'])->name('web.apartment.show');

Route::get('carpenter', [CarpenterController::class, 'index'])->name('web.carpenter.index');
Route::get('carpenter/{id}', [CarpenterController::class, 'show'])->name('web.carpenter.show');

Auth::routes();
