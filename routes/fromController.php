<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ppdbController;
use App\Http\Controllers\formUserController;
use App\Http\Controllers\fiturController;
use App\Http\Controllers\berkasUploadController;
use App\Http\Controllers\adminController;


// isian ppdb
route::post('/send-data-diri',[ppdbController::class, 'IsianPPDB'])->middleware('role:pengguna');

// pendaftran akun baru 
route::post('/kirim-data-user-baru',[formUserController::class, 'PendaftranUserBaru'])->middleware('role:pengguna');


// upload file
route::post('/upload-file',[ppdbController::class, 'uploadFile'])->middleware('role:penngguna');

// halaman upload file
route::get('/PPDB/pengisian-berkas',[ppdbController::class, 'halamanFileUpload'])->middleware('role:pengguna');

// hapus file
Route::get('/hapus-berkas/{jenisBerkas}', [ppdbController::class, 'hapusBerkas'])->middleware('role:pengguna');

// save data ke database
Route::post('/save-data-ppdb', [ppdbController::class, 'saveDataPPDB'])->middleware('role:pengguna');

// menampilkan data di database ke halaman admin
Route::get('admin/daftar-ppdb', [adminController::class, 'dataPDB'])->middleware('role:admin');


// kirim notifikasi terima 
// Route::get('/kirim-email-konfirmasi', function () {
//     $email = new SendEmail();
//     Mail::to('dimasardiminda@gmail.com')->send(new $email);

//     return 'alhamdulillah ayo solat';
// });

route::get('/kirim-notifikasi-terima', [adminController::class, 'kirimNotifikasiTerima'])->middleware('role:admin');

// tolak
route::get('/kirim-notifikasi-tolak', [adminController::class, 'kirimNotifikasiTolak'])->middleware('role:admin');

// cabut laporan
Route::delete('admin/daftar-akun/{email}',[adminController::class, 'cabutLaporan'] )->name('admin.CabutLaporan')->middleware('role:admin');

// proses login
Route::post('/proses-login',[formUserController::class, 'AuthSession']);

// daftarakun
Route::post('/daftar-akun',[formUserController::class, 'PendaftranUserBaru'])->middleware('role:pengguna');

// logout
Route::get('/proses-logout',[formUserController::class, 'logout'])->name('proses-logout')->middleware('role:pengguna');
Route::get('/admin-keluar',[formUserController::class, 'logout'])->name('proses-logout')->middleware('role:admin');

