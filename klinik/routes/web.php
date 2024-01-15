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

Route::get('/coba', function () {
    return view('coba');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

// ========================================
// Route admin
// ========================================



Route::get('/adminhome', function () {
    return view('/admin/home');
});

Route::get('/adminprofile', function () {
    return view('/admin/profile');
});

Route::get('/adminpasien', function () {
    return view('admin/pasien');
});

Route::get('/admindokter', function () {
    return view('/admin/dokter');
});

Route::get('/createdokter', function () {
    return view('/admin/createdokter');
});

Route::get('/createpasien', function () {
    return view('/admin/createpasien');
});

Route::get('/editpasien', function () {
    return view('/admin/editpasien');
});
// ====================================================
// route dokter
// ====================================================

Route::get('/dokterhome', function () {
    return view('/dokter/home');
});

Route::get('/dokterprofile', function () {
    return view('/dokter/profile');
});

Route::get('/dokumen', function () {
    return view('/dokter/dokumen');
});




// ====================================================
// route pasien
// ====================================================

Route::get('/pasienhome', function () {
    return view('/pasien/home');
});

Route::get('/pasienprofile', function () {
    return view('/pasien/profile');
});

Route::get('/pasienriwayat', function () {
    return view('/pasien/riwayat');
});

// Route::get('/submitform', function () {
//     return view('frontend/pasien/');
// });


// backend
// user
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/user', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::any('/user/delete/{id}', 'App\Http\Controllers\UserController@destroy');

// admin
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
Route::get('/admin/create', 'App\Http\Controllers\AdminController@create')->name('admin.create');
Route::post('/admin/store', 'App\Http\Controllers\AdminController@store')->name('admin.store');
Route::get('/admin/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');
Route::post('/admin', 'App\Http\Controllers\AdminController@update')->name('admin.update');
Route::any('/admin/delete/{id}', 'App\Http\Controllers\AdminController@destroy');

// pasien
Route::get('/pasien', 'App\Http\Controllers\PasienController@index')->name('pasien.index');
Route::get('/pasien/create', 'App\Http\Controllers\PasienController@create')->name('pasien.create');
Route::post('/pasien', 'App\Http\Controllers\PasienController@store')->name('pasien.store');
Route::get('/pasien/edit/{id}', 'App\Http\Controllers\PasienController@edit')->name('pasien.edit');
Route::post('/pasien', 'App\Http\Controllers\PasienController@update')->name('pasien.update');
Route::any('/pasien/delete/{id}', 'App\Http\Controllers\PasienController@destroy');

// dokter
Route::get('/dokter', 'App\Http\Controllers\DokterController@index')->name('dokter.index');
Route::get('/dokter/create', 'App\Http\Controllers\DokterController@create')->name('dokter.create');
Route::post('/dokter', 'App\Http\Controllers\DokterController@store')->name('dokter.store');
Route::get('/dokter/edit/{id}', 'App\Http\Controllers\DokterController@edit')->name('dokter.edit');
Route::post('/dokter', 'App\Http\Controllers\DokterController@update')->name('dokter.update');
Route::any('/dokter/delete/{id}', 'App\Http\Controllers\DokterController@destroy');
