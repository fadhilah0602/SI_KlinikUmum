<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\RuangController;
use App\Models\Dokter;

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


Route::get('/adminpasien', [PasienController::class, 'home']);
Route::get('/add-pasien', [PasienController::class, 'create']);
Route::post('/add-pasien', [PasienController::class, 'store']);
Route::get('editpasien/{pasien_id}', [PasienController::class, 'edit'])->name('editpasien.edit');
Route::put('update-pasien/{pasien_id}', [PasienController::class, 'update'])->name('updatepasien.update');
Route::delete('delete-pasien/{pasien_id}', [PasienController::class, 'destroy'])->name('deletepasien.destroy');

Route::get('/admindokter', [DokterController::class, 'home']);
Route::get('/add-dokter', [DokterController::class, 'create']);
Route::post('/add-dokter', [DokterController::class, 'store']);
Route::get('editdokter/{dokter_id}', [DokterController::class, 'edit'])->name('editdokter.edit');
Route::put('update-dokter/{dokter_id}', [DokterController::class, 'update'])->name('updatedokter.update');
Route::delete('delete-dokter/{dokter_id}', [DokterController::class, 'destroy'])->name('deletedokter.destroy');

Route::get('/user', [UserController::class, 'home']);
Route::get('/add-user', [UserController::class, 'create']);
Route::post('/add-user', [UserController::class, 'store']);
Route::get('edituser/{id}', [UserController::class, 'edit'])->name('edituser.edit');
Route::put('update-user/{id}', [UserController::class, 'update'])->name('updateuser.update');
Route::delete('delete-user/{user_id}', [UserController::class, 'destroy'])->name('deleteuser.destroy');
Route::delete('users/{id}', function ($id) {
});

Route::get('/poli', [RuangController::class, 'home']);
Route::get('/add-poli', [RuangController::class, 'create']);
Route::post('/add-poli', [RuangController::class, 'store']);
Route::delete('delete-poli/{ruang_id}', [RuangController::class, 'destroy'])->name('deleteruang.destroy');


Route::get('/adminhome', function () {
    return view('/admin/home');
});

Route::get('/adminprofile', function () {
    return view('/admin/profile');
});

Route::get('/admin', function () {
    return view('/admin/profile');
});
// Route::get('/adminpasien', function () {
//     return view('admin/pasien');
// });

// Route::get('/admindokter', function () {
//     return view('/admin/dokter');
// });

// Route::get('/createdokter', function () {
//     return view('/admin/createdokter');
// });
// Route::get('/createpasien', [PasienController::class, 'create']);
Route::get('/createdokter', [DokterController::class, 'create']);
Route::get('/createuser', [UserController::class, 'create']);
Route::get('/createpoli', [RuangController::class, 'create']);
// Route::get('/createpasien', function () {
//     return view('/admin/createpasien');
// });

// Route::get('/editpasien', function () {
//     return view('/admin/editpasien');
// });

// Route::get('/editdokter', function () {
//     return view('/admin/editdokter');
// });

// Route::get('/poli', function () {
//     return view('/admin/poli');
// });

Route::get('/jadwaldokter', function () {
    return view('/admin/jadwaldokter');
});

Route::get('/hasilpemeriksaan', function () {
    return view('/admin/hasilpemeriksaan');
});

// Route::get('/user', function () {
//     return view('/admin/user');
// });

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

//login multi user
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

//sign up
Route::post('/signup', [SignUpController::class, 'signup']);

// Route::get('/submitform', function () {
//     return view('frontend/pasien/');
// });


// backend
// user
// Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
// Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
// Route::post('/user', 'App\Http\Controllers\UserController@store')->name('user.store');
// Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
// Route::post('/user', 'App\Http\Controllers\UserController@update')->name('user.update');
// Route::any('/user/delete/{id}', 'App\Http\Controllers\UserController@destroy');

// admin
// Route::get('/admin', 'App\Http\Controllers\AdminController@home')->name('admin.home');
// Route::get('/admin/create', 'App\Http\Controllers\AdminController@create')->name('admin.createpasien');
// Route::post('/admin/store', 'App\Http\Controllers\AdminController@store')->name('admin.store');
// Route::get('/admin/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');
// Route::post('/admin', 'App\Http\Controllers\AdminController@update')->name('admin.update');
// Route::any('/admin/delete/{id}', 'App\Http\Controllers\AdminController@destroy');

// pasien
// Route::get('/pasien', 'App\Http\Controllers\PasienController@home')->name('pasien.home');
// Route::get('/pasien/create', 'App\Http\Controllers\PasienController@create')->name('pasien.createpasien');
// Route::post('/pasien', 'App\Http\Controllers\PasienController@store')->name('pasien.store');
// Route::get('/pasien/edit/{id}', 'App\Http\Controllers\PasienController@edit')->name('pasien.edit');
// Route::post('/pasien', 'App\Http\Controllers\PasienController@update')->name('pasien.update');
// Route::any('/pasien/delete/{id}', 'App\Http\Controllers\PasienController@destroy');

// dokter
// Route::get('/dokter', 'App\Http\Controllers\DokterController@index')->name('dokter.index');
// Route::get('/dokter/create', 'App\Http\Controllers\DokterController@create')->name('dokter.create');
// Route::post('/dokter', 'App\Http\Controllers\DokterController@store')->name('dokter.store');
// Route::get('/dokter/edit/{id}', 'App\Http\Controllers\DokterController@edit')->name('dokter.edit');
// Route::post('/dokter', 'App\Http\Controllers\DokterController@update')->name('dokter.update');
// Route::any('/dokter/delete/{id}', 'App\Http\Controllers\DokterController@destroy');
