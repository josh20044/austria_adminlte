<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('BSIT3A', [\App\Http\Controllers\BSIT3AController::class, 'index'])->name('BSIT3A.lists');
    Route::get('Student1', [\App\Http\Controllers\Student1Controller::class, 'index'])->name('student1');
    Route::get('Student2', [\App\Http\Controllers\Student2Controller::class, 'index'])->name('student2');
    Route::get('Student3', [\App\Http\Controllers\Student3Controller::class, 'index'])->name('student3');
  

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
