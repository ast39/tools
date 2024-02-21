<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('web.home');

Auth::routes();
