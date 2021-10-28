<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UsersController;



require __DIR__.'/auth.php';

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
->middleware(['auth'])->name('dashboard');

Route::get('/admin/services', [AdminController::class, 'services'])
->middleware(['auth'])->name('admin.services');

Route::get('/admin/rooms', [AdminController::class, 'rooms'])
->middleware(['auth'])->name('admin.rooms');

Route::get('/admin/users', [AdminController::class, 'users'])
->middleware(['auth'])->name('admin.users');


Route::get('/admin/waiting/rooms', [AdminController::class, 'waiting4Rooms'])
->middleware(['auth'])->name('admin.waiting.rooms');

Route::get('/admin/waiting/services', [AdminController::class, 'waiting4Services'])
->middleware(['auth'])->name('admin.waiting.services');

Route::get('/admin/waiting/trainer', [AdminController::class, 'waiting4PersonalTranier'])
->middleware(['auth'])->name('admin.waiting.trainer');

Route::get('/admin/waiting/table', [AdminController::class, 'waiting4DinnerTable'])
->middleware(['auth'])->name('admin.waiting.table');




//Rooms Controller
Route::get('/rooms', [RoomsController::class, 'index'])
    ->name('rooms');

Route::post('/room/store', [RoomsController::class, 'store'])
    ->name('room.store');

Route::post('/room/update', [RoomsController::class, 'update'])
    ->name('room.update');

Route::post('/room/delete', [RoomsController::class, 'delete'])
    ->name('room.delete');

Route::post('/room/delete', [RoomsController::class, 'delete'])
    ->name('room.delete');

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


//Reservation Controller
Route::post('/reserve/room', [ReservationController::class, 'room'])
->name('reserve.room');

Route::post('/reserve/service', [ReservationController::class, 'service'])
->name('reserve.service');

Route::get('/reserve/thankyou/{id}', [ReservationController::class, 'thankyou'])
->name('reserve.thankyou');


Route::get('/reserve/room/done/{id}', [ReservationController::class, 'reserveRoomDone'])
->name('reserve.room.done');

Route::get('/reserve/room/callback/{id}', [ReservationController::class, 'reserveRoomCallback'])
->name('reserve.room.callback');

Route::get('/reserve/service/done/{id}', [ReservationController::class, 'reserveServiceDone'])
->name('reserve.service.done');

Route::get('/reserve/service/callback/{id}', [ReservationController::class, 'reserveServiceCallback'])
->name('reserve.service.callback');



//Users Controller
Route::get('/user', [UsersController::class, 'index'])
    ->name('user');

Route::post('/user/store', [UsersController::class, 'store'])
    ->name('user.store');

Route::post('/user/update', [UsersController::class, 'update'])
    ->name('user.update');

Route::post('/user/delete', [UsersController::class, 'delete'])
    ->name('user.delete');






