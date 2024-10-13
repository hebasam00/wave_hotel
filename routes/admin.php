<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;

Route::get('/dashbord', [AdminController::class, 'dashbord'])
    ->name('dashbord');
//********************* START HOTELS ROUTE */
    Route::get('/hotels', [HotelController::class, 'index'])
    ->name('hotels');
    Route::get('/new/hotel', [HotelController::class, 'newHotel'])
    ->name('new.hotel');
    Route::post('/store/hotel', [HotelController::class, 'storeHotel'])
    ->name('store.hotel');
    Route::get('/update/hotel/{id}', [HotelController::class, 'update'])
    ->name('update.hotel');
    Route::post('/submit/hotel', [HotelController::class, 'submit'])
    ->name('submit.hotel');
    Route::delete('/hotels/delete/{id}', [HotelController::class, 'destroy'])->name('delete.hotel');
//********************* END HOTELS ROUTE */

//********************* START ROOMS ROUTE */
Route::get('/rooms', [RoomController::class, 'index'])
    ->name('rooms');
    Route::get('/new/room', [RoomController::class, 'newRoom'])
    ->name('new.room');
    Route::post('/store/room', [RoomController::class, 'storeRoom'])
    ->name('store.room');
    Route::get('/update/room/{id}', [RoomController::class, 'update'])
    ->name('update.room');
    Route::post('/submit/room', [RoomController::class, 'submit'])
    ->name('submit.room');
    Route::delete('/rooms/delete/{id}', [RoomController::class, 'destroy'])->name('delete.room');
