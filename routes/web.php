<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserController::class, 'home'])->name('home');
Route::get('/profile',[UserController::class, 'profile'])->name('profile.page');

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginReturnVal'])->name('login.val');
Route::get('/logout',[UserController::class, 'logout']);

Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'registerReqVal'])->name('register.val');

Route::get('/menu',[MenuController::class, 'index'])->name('menu.page');
Route::get('/menu/search',[MenuController::class, 'search']);


Route::get('/outlet',[OutletController::class, 'index'])->name('outlet.page');
Route::get('/outlet/search',[OutletController::class, 'search']);


Route::post('/booking', [BookingController::class, 'indexAndcreate'])->name('booking.page');
Route::get('/booking', [BookingController::class, 'indexAndcreate'])->name('booking.page');

Route::get('/admin-booking', [BookingController::class, 'adminIndex'])->name('admin.booking.page');

Route::post('/add-outlet', [OutletController::class, 'create'])->name('add.outlet');
Route::get('/add-outlet', [OutletController::class, 'create'])->name('add.outlet');
Route::get('/edit-outlet/{id}', [OutletController::class, 'edit'])->name('edit.outlet');
Route::post('/update-outlet/{id}', [OutletController::class, 'update'])->name('update.outlet');

Route::post('/add-menu', [MenuController::class, 'create'])->name('add.menu');
Route::get('/add-menu', [MenuController::class, 'create'])->name('add.menu');
Route::get('/edit-menu/{id}', [MenuController::class, 'edit'])->name('edit.menu');
Route::post('/update-menu/{id}', [MenuController::class, 'update'])->name('update.menu');