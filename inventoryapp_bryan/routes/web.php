<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'utama']);
Route::get('/register', [FormController::class, 'pendaftaran']);
Route::get('/welcome', [FormController::class, 'welcome']);
