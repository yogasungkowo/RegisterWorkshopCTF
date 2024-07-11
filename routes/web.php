<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegistrationController::class, 'showForm'])->name('showForm');
Route::post('/register', [RegistrationController::class, 'submitForm']);
