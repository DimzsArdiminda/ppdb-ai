<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ppdbController;
use App\Http\Controllers\formUserController;
use App\Http\Controllers\fiturController;
use App\Http\Controllers\berkasUploadController;

// isian ppdb
route::post('/send-data-diri',[ppdbController::class, 'IsianPPDB']);

// pendaftran akun baru 
route::post('/kirim-data-user-baru',[formUserController::class, 'PendaftranUserBaru']);

// pencarian
route::get('/pencarian',[fiturController::class, 'handleSearch'])->name('pencarian');

// upload file
route::post('/upload-file',[berkasUploadController::class, 'uploadFile']);
