<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gcalender;
use Layanan\GoogleCalendarService;
use App\Http\Middleware\CheckRole;

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
})->middleware('role:pengguna');

// halaman ppdb
Route::get('PPDB', function () {
    return view('dashboard.ppdb');
})->middleware('role:pengguna');

// halaman PPDB - pendaftaran
// route grub ppdb
Route::prefix('PPDB')->group(function () {
    // pengisian form peratama
    Route::get('/pengisian-data-diri', function () {
        return view('pendaftaranPPDB.pendaftaran-ppdb');
    })->middleware('role:pengguna');

    Route::get('/tutorial-pengisian', function () {
        return view('pendaftaranPPDB.pengecekan-ulang');
    })->middleware('role:pengguna');
    

});

Route::prefix('Pendaftaran')->group(function () {
    // Middleware untuk route akun baru
    Route::get('Akun-Baru', function () {
        return view('formUser.pendaftaran');
    });

    // Middleware untuk route login
    Route::get('login', function () {
        return view('formUser.loginUser');
    });

    // Middleware untuk route reset
    Route::get('reset-akun', function () {
        return view('formUser.reset-sandi');
    });
});


Route::prefix('admin')->group(function () {
    // akun baru
    Route::get('daftar-ppdb', function () {
        return view('admin.dashboard');
    })->middleware('role:admin');

    // login
    Route::get('daftar-akun', function () {
        return view('admin.PPDB');
    })->middleware('role:admin');

    Route::get('/email/terima', function () {
        return view('email.template');
    })->middleware('role:admin');
});

route::get('/email/terima', function () {
    return view('email.template');
})->middleware('role:admin');

route::get('/email/tolak', function () {
    return view('email.template');
})->middleware('role:admin');

route::get('/logout', function () {
    return view('dashboard.logout');
});
// from controller
include 'fromController.php';

