<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\JadwaldokterController;
use App\Http\Controllers\JadwalpemeriksaanController;
use App\Http\Controllers\HasilpemeriksaanController;
use App\Http\Controllers\SuratKeteranganController;
use App\Http\Controllers\MessageController;
use App\Models\Dokter;
use App\Models\JadwalPemeriksaan;
use App\Models\SuratKeterangan;
use App\Http\Controllers\ContactController;

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

Route::get('/contact', [ContactController::class, 'home']);
Route::post('/add-home', [ContactController::class, 'store']);

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
Route::get('/createpasien', [PasienController::class, 'create']);
Route::post('/createpasien', [PasienController::class, 'store']);
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

Route::get('/jadwaldokter', [JadwaldokterController::class, 'home']);
Route::get('/createjadwaldokter', [JadwaldokterController::class, 'create']);
Route::post('/createjadwaldokter', [JadwaldokterController::class, 'store']);
Route::delete('delete-jadwaldokter/{jadwal_dokter_id}', [JadwaldokterController::class, 'destroy'])->name('deletejadwaldokter.destroy');


Route::get('/jadwalpemeriksaan', [JadwalpemeriksaanController::class, 'home']);
Route::get('/createjadwalpemeriksaan', [JadwalpemeriksaanController::class, 'create']);
Route::post('/createjadwalpemeriksaan', [JadwalpemeriksaanController::class, 'store']);
Route::get('editjadwalpemeriksaan/{jadwal_pemeriksaan_id}', [JadwalpemeriksaanController::class, 'edit'])->name('editjadwalpemeriksaan.edit');
Route::put('update-jadwalpemeriksaan/{jadwal_pemeriksaan_id}', [JadwalPemeriksaanController::class, 'update'])->name('updatejadwalpemeriksaan.update');
Route::delete('delete-jadwalpemeriksaan/{jadwal_pemeriksaan_id}', [JadwalpemeriksaanController::class, 'destroy'])->name('deletejadwalpemeriksaan.destroy');

Route::get('/hasilpemeriksaan', [HasilpemeriksaanController::class, 'homeadmin']);
Route::get('/createhasilpemeriksaan', [HasilpemeriksaanController::class, 'create']);
Route::post('/createhasilpemeriksaan', [HasilpemeriksaanController::class, 'store']);
Route::get('edithasilpemeriksaan/{hasil_pemeriksaan_id}', [HasilpemeriksaanController::class, 'edit'])->name('edithasilpemeriksaan.edit');
Route::put('update-hasilpemeriksaan/{hasil_pemeriksaan_id}', [HasilpemeriksaanController::class, 'update'])->name('updatehasilpemeriksaan.update');
Route::delete('delete-hasilpemeriksaan/{hasil_pemeriksaan_id}', [HasilpemeriksaanController::class, 'destroy'])->name('deletehasilpemeriksaan.destroy');

Route::get('/adminhome', [AdminController::class, 'home']);


Route::get('/adminprofile', function () {
    return view('/admin/profile');
});

Route::get('/admin', function () {
    return view('/admin/profile');
});

Route::get('/createdokter', [DokterController::class, 'create']);
Route::get('/createuser', [UserController::class, 'create']);
Route::get('/createpoli', [RuangController::class, 'create']);





// ====================================================
// route dokter
// ====================================================

Route::get('/dokterhome', [DokterController::class, 'homedokter'])->name('dokter.home');

Route::get('/dokterprofile', function () {
    return view('/dokter/profile');
});

Route::get('/dokterpemeriksaan', [HasilpemeriksaanController::class, 'home']);


// Route::get('/dokterpemeriksaan', function () {
//     return view('/dokter/dokterpemeriksaan');
// });


// Route::get('/dokumen', function () {
//     return view('/dokter/dokumen');
// });

Route::get('/suratketerangan', [SuratKeteranganController::class, 'home']);
Route::get('/createsurat', [SuratKeteranganController::class, 'create'])->name('dokter.createsurat');
Route::post('/createsurat', [SuratKeteranganController::class, 'store'])->name('dokter.suratketerangan');
Route::get('/dokumen/{surat_keterangan_id}', [SuratKeteranganController::class, 'dokumen'])->name('dokter.dokumen');
// Route::post('/dokumen', [SuratKeteranganController::class, 'store']);





// ====================================================
// route pasien
// ====================================================

Route::get('/pasienhome', [JadwalpemeriksaanController::class, 'create']);
Route::post('/createjadwalpemeriksaan', [JadwalpemeriksaanController::class, 'store']);

Route::get('/pasienprofile', function () {
    return view('/pasien/profile');
});

Route::get('/pasienriwayat', [HasilpemeriksaanController::class, 'homepasien']);

//login multi user

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

//sign up
Route::post('/signup', [SignUpController::class, 'signup']);


