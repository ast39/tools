<?php

use App\Http\Controllers\Web\AdvantagesController;
use App\Http\Controllers\Web\ApartmentController;
use App\Http\Controllers\Web\CarpenterController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\ContactsController;
use App\Http\Controllers\Web\ElectricianController;
use App\Http\Controllers\Web\FurnitureController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\HusbandController;
use App\Http\Controllers\Web\PlumberController;
use App\Http\Controllers\Web\ReviewsController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\SphereController;
use App\Http\Controllers\Web\TechnicalController;
use Illuminate\Support\Facades\Route;

# Страница по дефолту - Main page
Route::get('/', HomeController::class)->name('web.home');

# Общий роут для сфер
Route::get('catalog/{sphere}', [SphereController::class, 'show'])->name('web.sphere.show');

# Общий роут для категорий
Route::get('catalog/{sphere}/{category}', [CategoryController::class, 'show'])->name('web.category.show');

# Раздел "Наши услуги"
Route::get('services', [ServicesController::class, 'index'])->name('web.services.index');

# Раздел "Отзывы клиентов"
Route::get('reviews', [ReviewsController::class, 'index'])->name('web.reviews.index');

# Раздел "Наши преимущества"
Route::get('advantages', [AdvantagesController::class, 'index'])->name('web.advantages.index');

# Раздел контактов
Route::get('contacts', [ContactsController::class, 'index'])->name('web.contacts.index');
