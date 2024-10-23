<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomImageController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); // دالة العرض
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // دالة التخزين


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Routes for rooms and images
Route::get('/admin/rooms/{roomId}/images', [RoomImageController::class, 'index'])->name('room.images.index');
Route::get('/admin/rooms/{roomId}/images/create', [RoomImageController::class, 'create'])->name('room.images.create');
Route::post('/admin/rooms/images/store', [RoomImageController::class, 'store'])->name('room.images.store');
Route::delete('/admin/rooms/images/{id}', [RoomImageController::class, 'destroy'])->name('room.images.destroy');
// Route to store the uploaded image
Route::post('admin/room-images/store', [RoomImageController::class, 'store'])->name('admin.store.image');


Route::get('/rooms',[FrontController::class,'rooms'])->name('rooms');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
//************ROOMS**************/
Route::get('/single/room', [FrontController::class,'singleRooms'])->name('single.room');

Route::get('/double/room', [FrontController::class,'doubleRooms'])->name('double.room');

Route::get('/family/room', [FrontController::class,'familyRooms'])->name('family.room');

Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact');

