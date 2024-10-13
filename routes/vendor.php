<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

Route::get('/dashbord', [VendorController::class, 'dashbord'])
    ->name('dashbord');
