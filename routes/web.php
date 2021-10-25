<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\CompanyController;

//Auth Controller
// require __DIR__.'/auth.php';

//Home Controller
Route::get('/welcome', [HomeController::class, 'welcome'])
    ->name('welcome');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');


Route::get('/about', [HomeController::class, 'about'])
    ->name('about');

Route::get('/services', [HomeController::class, 'services'])
    ->name('services');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact');




Route::get('/dashboard', [HomeController::class, 'dashboard'])
->name('dashboard');

Route::get('/company', [HomeController::class, 'dashboard'])
    ->name('company');

Route::get('/user', [HomeController::class, 'dashboard'])
->name('user');

Route::get('/logout', [HomeController::class, 'logout'])
->name('logout');

// Route::get('/user/home', [HomeController::class, 'userHome'])
//     ->name('user.home');

// Route::get('/admin/home', [HomeController::class, 'adminHome'])
//     ->middleware(['auth'])->name('admin.home');

// Route::get('/dashboard', [HomeController::class, 'dashboard'])
//     ->middleware(['auth'])->name('dashboard');
