<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/calendar',[HomeController::class,'create']);

    Route::get('/',[HomeController::class,'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::get('users/{user}/settings',[AdminController::class,'edit'])->name('users.settings.edit');
    Route::Put('users/{user}/update',[AdminController::class,'update'])->name('users.settings.update');
    Route::get('room/{room}/booking',[BookingController::class , 'index'])->name('room.booking');
    Route::post('booking/{room}/store',[BookingController::class , 'create'])->name('booking.store');
    Route::get('bookings/all',[BookingController::class , 'bookings'])->name('bookings.all');
});

//


Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard', [AdminController::class , 'index'])->name('dashboard');
    Route::get('admin/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('admin/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('admin/roles/store',[RoleController::class,'store'])->name('roles.store');
    Route::get('admin/roles/{role}/edit',[RoleController::class,'edit'])->name('roles.edit');
    Route::put('admin/roles/{role}/update',[RoleController::class,'update'])->name('roles.update');
    Route::delete('admin/roles/{role}/destroy',[RoleController::class,'destroy'])->name('roles.destroy');
    //users Routes
    Route::get('admin/users/index',[UserController::class , 'index'])->name('users.index');
    Route::put('admin/users/{user}/attach',[UserController::class, 'attach'])->name('users.attach');
    Route::put('admin/users/{user}/detach',[UserController::class, 'detach'])->name('users.detach');
    Route::delete('admin/users/{user}/destroy',[UserController::class, 'destroy'])->name('users.destroy');
    Route::get('admin/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
    Route::put('admin/users/{user}/update',[UserController::class, 'update'])->name('users.update');
    Route::get('admin/users/{user}/show',[UserController::class, 'show'])->name('user.profile.show');
    //rooms Routes
    Route::get('admin/rooms/index',[RoomController::class , 'index'])->name('rooms.index');
    Route::get('admin/rooms/create',[RoomController::class , 'create'])->name('rooms.create');
    Route::post('admin/rooms/store',[RoomController::class,'store'])->name('rooms.store');
    Route::delete('admin/rooms/{room}/destroy',[RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('admin/rooms/{room}/edit',[RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('admin/rooms/{room}/update',[RoomController::class, 'update'])->name('rooms.update');

    Route::get('admin/bookings/showall',[BookingController::class ,'showAll'])->name('bookings.showall');
    Route::get('admin/bookings/{booking}/edit',[BookingController::class ,'edit'])->name('bookings.edit');
    Route::put('admin/bookings/{booking}/update',[BookingController::class ,'update'])->name('bookings.update');
    Route::delete('admin/bookings/{booking}/destroy',[BookingController::class ,'destroy'])->name('bookings.destroy');




});
require __DIR__.'/auth.php';
