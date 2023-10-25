<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formDataDiriPPDB;
use App\Http\Requests\fromUploadFilePPDB;
use App\Models\dataPPDB;

class ppdbController extends Controller
{
    // data diri ppdb
    public function IsianPPDB(formDataDiriPPDB $request){

        // kirim data ke halaman lain 
        $data = $request->all();

        
        // Set notifikasi flash
        $request->session()->flash('success', 'Data berhasil di kirim, lanjutkan ke step berikutnya.');

        $request->session()->put('data', $data);
        return redirect('PPDB/pengisian-data-diri');
    }
    public function halamanFileUpload(){
        return view('pendaftaranPPDB.upload-berkas');
    }

        // hapus file pdf jika salah
        public function hapusBerkas($jenisBerkas)
    {
            // Hapus berkas dari session
            session()->forget("berkas.$jenisBerkas");

        return redirect()->back();
    }

    public function uploadFile(fromUploadFilePPDB $request)
{
    // dd($request->all());

    // Simpan data PPDB ke tabel
    $dataPPDB = new dataPPDB();
    $dataPPDB->nama = $request->input('nama');
    $dataPPDB->email = $request->input('email');
    $dataPPDB->Tempat_lahir = $request->input('Tempat_lahir');
    $dataPPDB->Tanggal_Lahir = $request->input('Tanggal_Lahir');
    $dataPPDB->alamat = $request->input('alamat');
    // $dataPPDB->save();

    // Ijazah
if ($request->hasFile('berkasIjazah')) {
    $fileIjazah = $request->file('berkasIjazah');
    $namaFileIjazah = $fileIjazah->getClientOriginalName();  // Menggunakan nama asli file
    $fileIjazah->move(public_path('berkasPPDB'), $namaFileIjazah);

    // Simpan path berkas ke tabel PPDB
    $dataPPDB->berkasIjazah = "<a href='/berkasPPDB/$namaFileIjazah'>file ijasah ada disini</a>";
}

// Foto
if ($request->hasFile('berkasFoto')) {
    $fileFoto = $request->file('berkasFoto');
    $namaFileFoto = $fileFoto->getClientOriginalName();  // Menggunakan nama asli file
    $fileFoto->move(public_path('berkasPPDB'), $namaFileFoto);

    $dataPPDB->berkasFoto = 'berkasPPDB/' . $namaFileFoto;
    $dataPPDB->berkasFoto = "<a href='/berkasPPDB/$namaFileFoto'>file foto ada disini</a>";
    
}

// Prestasi
if ($request->hasFile('berkasPrestasi')) {
    $filePrestasi = $request->file('berkasPrestasi');
    $namaFilePrestasi = $filePrestasi->getClientOriginalName();  // Menggunakan nama asli file
    $filePrestasi->move(public_path('berkasPPDB'), $namaFilePrestasi);

    $dataPPDB->berkasPrestasi = "<a href='/berkasPPDB/$namaFilePrestasi'>file prestasi ada disini</a>";
}

    // KK
    if ($request->hasFile('berkasKK')) {
        $fileKK = $request->file('berkasKK');
        $namaFileKK = $fileKK->getClientOriginalName();  // Menggunakan nama asli file
        $fileKK->move(public_path('berkasPPDB'), $namaFileKK);

        $dataPPDB->berkasKK = "<a href='/berkasPPDB/$namaFileKK'>file KK ada disini</a>";
    }
    
    // KTP Orang Tua
    if ($request->hasFile('berkasKTPOrangTua')) {
        $fileKTPOrangTua = $request->file('berkasKTPOrangTua');
        $namaFileKTPOrangTua = $fileKTPOrangTua->getClientOriginalName();  // Menggunakan nama asli file
        $fileKTPOrangTua->move(public_path('berkasPPDB'), $namaFileKTPOrangTua);
        
        $dataPPDB->berkasKTPOrangTua = "<a href='/berkasPPDB/$namaFileKTPOrangTua'>file KK ada disini</a>";
    }

    // Simpan data ke database
    $dataPPDB->save();

    // Set notifikasi flash jika berkas berhasil diunggah
    $request->session()->flash('success', 'Berkas berhasil diunggah.');

    return redirect('/PPDB')->with('success', 'Berkas berhasil diunggah.');
}



}
