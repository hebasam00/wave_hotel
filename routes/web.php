<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Hotels 5 star ////

Route::get('/hotel5', function () {
    return view('hotel5star');
})->name('hotel5');

//hotels 4 star //

Route::get('/hotel4', function () {
    return view('hotel4star');
})->name('hotel4');

//login //


// navbar //

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotels');

Route::get('/yachts', function () {
    return view('yachts');
})->name('yachts');

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

Route::get('/car-rentals', function () {
    return view('car-rentals');
})->name('car-rentals');

Route::get('/things-rentals', function () {
    return view('things-rentals');
})->name('things-rentals');

Route::get('/ayla-rentals', function () {
    return view('ayla-rentals');
})->name('ayla-rentals');

Route::get('/Movenpick', function () {
    return view('Movenpick');
})->name('Movenpick');

Route::get('/DoubleTreebyHiltonAqaba', function () {
    return view('DoubleTreebyHiltonAqaba');
})->name('DoubleTreebyHiltonAqaba');

Route::get('/HyattRegencyAqaba', function () {
    return view('HyattRegencyAqaba');
})->name('HyattRegencyAqaba');


Route::get('/lacosta', function () {
    return view('lacosta');
})->name('lacosta');

Route::get('/oryx', function () {
    return view('oryx');
})->name('oryx');

Route::get('/luxuryyachts', function () {
    return view('luxuryyachts');
})->name('luxuryyachts');


Route::get('/speedyachts', function () {
    return view('speedyachts');
})->name('speedyachts');

Route::get('/FineDining', function () {
    return view('FineDining');
})->name('fine');

Route::get('/casual', function () {
    return view('CasualDining');
})->name('casual');

Route::get('/economycar', function () {
    return view('economycar');
})->name('economycar');




Route::get('/ScubaDiving', function () {
    return view('ScubaDiving');
})->name('ScubaDiving');

Route::get('/DesertSafari', function () {
    return view('DesertSafari');
})->name('DesertSafari');


Route::get('/AylaGolfClub', function () {
    return view('AylaGolfClub');
})->name('AylaGolfClub');


Route::get('/AylaYachtClub', function () {
    return view('AylaYachtClub');
})->name('AylaYachtClub');

Route::get('/luxurycar', function () {
    return view('luxurycar');
})->name('luxurycar');




