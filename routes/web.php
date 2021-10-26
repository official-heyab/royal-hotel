<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;

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

Route::get('/user/services', [HomeController::class, 'services'])
    ->name('user.services');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact');

Route::get('/logout', [HomeController::class, 'logout'])
->name('logout');



//Admin Controller
Route::get('/dashboard', [AdminController::class, 'dashboard'])
->name('dashboard');

Route::get('/admin/services', [AdminController::class, 'services'])
    ->name('admin.services');

Route::get('/admin/rooms', [AdminController::class, 'rooms'])
->name('admin.rooms');


//Rooms Controller
Route::get('/rooms', [RoomsController::class, 'index'])
    ->name('rooms');

Route::post('/room/store', [RoomsController::class, 'store'])
    ->name('room.store');

Route::post('/room/update', [RoomsController::class, 'update'])
    ->name('room.update');

Route::post('/room/delete', [RoomsController::class, 'delete'])
    ->name('room.delete');


//Services Controller
Route::get('/services', [ServicesController::class, 'index'])
    ->name('services');

Route::post('/service/store', [ServicesController::class, 'store'])
    ->name('service.store');

Route::post('/service/update', [ServicesController::class, 'update'])
    ->name('service.update');

Route::post('/service/delete', [ServicesController::class, 'delete'])
    ->name('service.delete');


