<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Student List (Index)
Route::get('/students', function () {
    return view('students.index');
})->name('students.index');

// Add Student Form (Create)
Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

// View Student Profile (Show) - using a static ID '1' for simulation
Route::get('/students/1', function () {
    return view('students.show');
})->name('students.show');

// Edit Student Form (Edit) - using a static ID '1' for simulation
Route::get('/students/1/edit', function () {
    return view('students.edit');
})->name('students.edit');