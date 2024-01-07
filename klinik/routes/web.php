<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('frontend/admin/home');
});

Route::get('/profile', function () {
    return view('frontend/admin/profile');
});

Route::get('/pasien', function () {
    return view('frontend/admin/pasien');
});

Route::get('/dokter', function () {
    return view('frontend/admin/dokter');
});

// backend

Route::resource('users', UserController::class);
Route::resource('admins', AdminController::class);
Route::resource('pasiens', PasienController::class);
Route::resource('dokters', DokterController::class);
