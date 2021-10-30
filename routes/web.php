<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HallsController;
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

Route::get('/user/menu', [HomeController::class, 'menu'])
    ->name('user.menu');

Route::get('/user/halls', [HomeController::class, 'halls'])
    ->name('user.halls');

Route::get('/user/services', [HomeController::class, 'services'])
    ->name('user.services');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact');

Route::get('/logout', [HomeController::class, 'logout'])
->name('logout');



//Admin Controller
Route::get('/admin', [AdminController::class, 'dashboard'])
->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth'])->name('dashboard');

Route::get('/admin/menu', [AdminController::class, 'menu'])
->middleware(['auth'])->name('admin.menu');

Route::get('/admin/services', [AdminController::class, 'services'])
->middleware(['auth'])->name('admin.services');

Route::get('/admin/rooms', [AdminController::class, 'rooms'])
->middleware(['auth'])->name('admin.rooms');

Route::get('/admin/halls', [AdminController::class, 'halls'])
->middleware(['auth'])->name('admin.halls');

Route::get('/admin/users', [AdminController::class, 'users'])
->middleware(['auth'])->name('admin.users');


Route::get('/admin/waiting/rooms', [AdminController::class, 'waiting4Rooms'])
->middleware(['auth'])->name('admin.waiting.rooms');

Route::get('/admin/waiting/services', [AdminController::class, 'waiting4Services'])
->middleware(['auth'])->name('admin.waiting.services');

Route::get('/admin/waiting/menu', [AdminController::class, 'waiting4Menu'])
->middleware(['auth'])->name('admin.waiting.menu');

Route::get('/admin/waiting/hall', [AdminController::class, 'waiting4Halls'])
->middleware(['auth'])->name('admin.waiting.hall');



Route::get('/admin/waiting/beauty', [AdminController::class, 'waiting4BeautySalon'])
->middleware(['auth'])->name('admin.waiting.beauty');

Route::get('/admin/waiting/gym', [AdminController::class, 'waiting4GYM'])
->middleware(['auth'])->name('admin.waiting.gym');

Route::get('/admin/waiting/laundry', [AdminController::class, 'waiting4Laundry'])
->middleware(['auth'])->name('admin.waiting.laundry');

Route::get('/admin/waiting/pool', [AdminController::class, 'waiting4SwimmingPool'])
->middleware(['auth'])->name('admin.waiting.pool');

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


//Menu Controller
Route::get('/menu', [MenuController::class, 'index'])
    ->name('menu');

Route::post('/menu/store', [MenuController::class, 'store'])
    ->name('menu.store');

Route::post('/menu/update', [MenuController::class, 'update'])
    ->name('menu.update');

Route::post('/menu/delete', [MenuController::class, 'delete'])
    ->name('menu.delete');


//Halls Controller
Route::get('/halls', [HallsController::class, 'index'])
    ->name('halls');

Route::post('/hall/store', [HallsController::class, 'store'])
    ->name('hall.store');

Route::post('/hall/update', [HallsController::class, 'update'])
    ->name('hall.update');

Route::post('/hall/delete', [HallsController::class, 'delete'])
    ->name('hall.delete');


//Reservation Controller
Route::post('/reserve/room', [ReservationController::class, 'room'])
->name('reserve.room');

Route::post('/reserve/menu', [ReservationController::class, 'menu'])
->name('reserve.menu');

Route::post('/reserve/hall', [ReservationController::class, 'hall'])
->name('reserve.hall');

Route::post('/reserve/service', [ReservationController::class, 'service'])
->name('reserve.service');

Route::post('/reserve/laundry', [ReservationController::class, 'laundry'])
->name('reserve.laundry');

Route::post('/reserve/beauty', [ReservationController::class, 'beauty'])
->name('reserve.beauty');

Route::post('/reserve/gym', [ReservationController::class, 'gym'])
->name('reserve.gym');

Route::post('/reserve/pool', [ReservationController::class, 'pool'])
->name('reserve.pool');

Route::post('/reserve/table', [ReservationController::class, 'table'])
->name('reserve.table');

Route::post('/reserve/trainer', [ReservationController::class, 'trainer'])
->name('reserve.trainer');

Route::get('/reserve/thankyou/{id}', [ReservationController::class, 'thankyou'])
->name('reserve.thankyou');




Route::get('/reserve/room/done/{id}', [ReservationController::class, 'reserveRoomDone'])
->name('reserve.room.done');

Route::get('/reserve/room/callback/{id}', [ReservationController::class, 'reserveRoomCallback'])
->name('reserve.room.callback');

Route::get('/reserve/menu/done/{id}', [ReservationController::class, 'reserveMenuDone'])
->name('reserve.menu.done');

Route::get('/reserve/menu/callback/{id}', [ReservationController::class, 'reserveMenuCallback'])
->name('reserve.menu.callback');

Route::get('/reserve/hall/done/{id}', [ReservationController::class, 'reserveHallDone'])
->name('reserve.hall.done');

Route::get('/reserve/hall/callback/{id}', [ReservationController::class, 'reserveHallCallback'])
->name('reserve.hall.callback');

Route::get('/reserve/service/done/{sID}/{id}', [ReservationController::class, 'reserveServiceDone'])
->name('reserve.service.done');

Route::get('/reserve/service/callback/{sID}/{id}', [ReservationController::class, 'reserveServiceCallback'])
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






