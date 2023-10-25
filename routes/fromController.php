<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ppdbController;
use App\Http\Controllers\formUserController;
use App\Http\Controllers\fiturController;
use App\Http\Controllers\berkasUploadController;
use App\Http\Controllers\adminController;

// isian ppdb
route::post('/send-data-diri',[ppdbController::class, 'IsianPPDB']);

// pendaftran akun baru 
route::post('/kirim-data-user-baru',[formUserController::class, 'PendaftranUserBaru']);

// pencarian
route::get('/pencarian',[fiturController::class, 'handleSearch'])->name('pencarian');

// upload file
route::post('/upload-file',[ppdbController::class, 'uploadFile']);

// halmaam upload file
route::get('/PPDB/pengisian-berkas',[ppdbController::class, 'halamanFileUpload']);

// hapus file
Route::get('/hapus-berkas/{jenisBerkas}', [ppdbController::class, 'hapusBerkas']);

// save data ke database
Route::post('/save-data-ppdb', [ppdbController::class, 'saveDataPPDB']);

// menampilkan data di database ke halaman admin
Route::get('admin/daftar-akun', [adminController::class, 'dataPDB']);
