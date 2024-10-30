<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController; // تأكد من استخدام الـ Controller المناسب
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\UserController;

// مجموعة من الراوتات للإدارة
Route::prefix('admin')->name('admin.')->group(function () {
    // عرض ملف تعريف المستخدم
    Route::get('profile', [UserController::class, 'showProfile'])->name('profile.show');

    // تحديث ملف تعريف المستخدم
    Route::post('profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

    // عرض جميع المستخدمين
    Route::get('users', [UserController::class, 'index'])->name('users.index');

    // عرض نموذج تعديل المستخدم
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

    // تحديث بيانات المستخدم
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');

    // حذف مستخدم
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/profile', [UserController::class, 'showProfile'])->name('admin.profile.show');

Route::get('/profile', [UserController::class, 'showProfile'])->name('admin.profile.show');
Route::post('/profile', [UserController::class, 'updateProfile'])->name('admin.profile.update');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});

Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
Route::resource('bookings', BookingController::class);
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');

Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
// تعديل حجز
Route::get('/admin/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/admin/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');

// حذف حجز
Route::delete('/admin/bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');







// Route to show the booking page


Route::get('/rooms/{roomId}/images', [RoomController::class, 'index'])->name('room.images.index');



// ************ Home & Static Pages ************
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// ************ Contact Routes ************
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); // صفحة التواصل
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // حفظ بيانات التواصل
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact'); // عرض صفحة التواصل في الواجهة الأمامية

// ************ Room Booking & Display Routes ************
Route::post('/book-room', [RoomController::class, 'bookRoom'])->name('bookRoom');



// ************ Room Types (Frontend) ************
Route::get('/rooms', [FrontController::class, 'rooms'])->name('rooms');
Route::get('/single/room', [FrontController::class, 'singleRooms'])->name('single.room');
Route::get('/double/room', [FrontController::class, 'doubleRooms'])->name('double.room');
Route::get('/family/room', [FrontController::class, 'familyRooms'])->name('family.room');

// ************ Admin Routes ************
Route::prefix('admin')->name('admin.')->group(function () {

    // إدارة المستخدمين
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); // تعديل المستخدم
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // حذف المستخدم

    // إدارة التواصل
    Route::get('/contact', [ContactController::class, 'index'])->name('contact'); // عرض تواصل المشرف
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy'); // حذف تواصل من المشرف

    // إدارة صور الغرف
    Route::get('/rooms/{roomId}/images', [RoomImageController::class, 'index'])->name('room.images.index');
    Route::get('/rooms/{roomId}/images/create', [RoomImageController::class, 'create'])->name('room.images.create');
    Route::post('/rooms/images/store', [RoomImageController::class, 'store'])->name('room.images.store');
    Route::delete('/rooms/images/{id}', [RoomImageController::class, 'destroy'])->name('room.images.destroy');
});

// ************ User Profile & Authentication ************
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ************ Dashboard Route ************
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ************ Authentication Routes ************
require __DIR__.'/auth.php';
