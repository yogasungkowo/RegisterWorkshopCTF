<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RegistrationController::class, 'showForm']);

Route::get('/register', [RegistrationController::class, 'showForm'])->name('showForm');
Route::post('/register', [RegistrationController::class, 'submitForm']);
