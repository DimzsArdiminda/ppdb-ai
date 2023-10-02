<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gcalender;
use Layanan\GoogleCalendarService;

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

// halaman awal
Route::get('/', function () {
    return view('halaman_awal.awal');
});

// halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

// halaman sejarah
Route::get('sejarah', function () {
    return view('dashboard.sejarah');
});

// halaman ppdb
Route::get('PPDB', function () {
    return view('dashboard.ppdb');
});

// halaman PPDB - pendaftaran
// route grub ppdb
Route::prefix('PPDB')->group(function () {
    // pengisian form peratama
    Route::get('/pengisian-data-diri', function () {
        return view('pendaftaranPPDB.pendaftaran-ppdb');
    });

    // pengisian floder yang di butuhkan
    Route::get('/pengisian-berkas', function () {
        return view('pendaftaranPPDB.upload-berkas');
    });

    Route::get('/pengecekan-ulang-berkas', function () {
        return view('pendaftaranPPDB.pengecekan-ulang');
    });
    

});

Route::prefix('Pendaftaran')->group(function () {
    // akun baru
    Route::get('Pendaftar-Baru', function () {
        return view('formUser.pendaftaran');
    });

    // login
    Route::get('Login', function () {
        return view('formUser.loginUser');
    });
});


// from controller
include 'fromController.php';

