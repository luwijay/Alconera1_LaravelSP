<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Student Routes
Route::resource('students', StudentController::class);
