<?php

use App\Http\Controllers\Web\AdvantagesController;
use App\Http\Controllers\Web\ApartmentController;
use App\Http\Controllers\Web\CarpenterController;
use App\Http\Controllers\Web\ContactsController;
use App\Http\Controllers\Web\ElectricianController;
use App\Http\Controllers\Web\FurnitureController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\HusbandController;
use App\Http\Controllers\Web\PlumberController;
use App\Http\Controllers\Web\ReviewsController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\TechnicalController;
use Illuminate\Support\Facades\Route;

# Страница по дефолту - Main page
Route::get('/', HomeController::class)->name('web.home');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('electrician', [ElectricianController::class, 'index'])->name('web.electrician.index');
Route::get('electrician/{id}', [ElectricianController::class, 'show'])->name('web.electrician.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('plumber', [PlumberController::class, 'index'])->name('web.plumber.index');
Route::get('plumber/{id}', [PlumberController::class, 'show'])->name('web.plumber.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('husband', [HusbandController::class, 'index'])->name('web.husband.index');
Route::get('husband/{id}', [HusbandController::class, 'show'])->name('web.husband.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('technical', [TechnicalController::class, 'index'])->name('web.technical.index');
Route::get('technical/{id}', [TechnicalController::class, 'show'])->name('web.technical.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('furniture', [FurnitureController::class, 'index'])->name('web.furniture.index');
Route::get('furniture/{id}', [FurnitureController::class, 'show'])->name('web.furniture.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('apartment', [ApartmentController::class, 'index'])->name('web.apartment.index');
Route::get('apartment/{id}', [ApartmentController::class, 'show'])->name('web.apartment.show');

# Раздел электрики в верхнем меню (общий и просмотр категорий с услугами и прайсом)
Route::get('carpenter', [CarpenterController::class, 'index'])->name('web.carpenter.index');
Route::get('carpenter/{id}', [CarpenterController::class, 'show'])->name('web.carpenter.show');

# Раздел "Наши услуги"
Route::get('services', [ServicesController::class, 'index'])->name('web.services.index');

# Раздел "Отзывы клиентов"
Route::get('reviews', [ReviewsController::class, 'index'])->name('web.reviews.index');

# Раздел "Наши преимущества"
Route::get('advantages', [AdvantagesController::class, 'index'])->name('web.advantages.index');

# Раздел контактов
Route::get('contacts', [ContactsController::class, 'index'])->name('web.contacts.index');
