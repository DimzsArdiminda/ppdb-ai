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

        // Set notifikasi
        $request->session()->flash('success', 'Data berhasil di kirim, lanjutkan ke step berikutnya.');

        // $request->session()->put('data', $data);
        return redirect('PPDB/pengisian-data-diri');
    }

    // file upload
    public function uploadFile(fromUploadFilePPDB $request)
{
    // Simpan data berkas ke sesi
    $berkas = $request->all();

    // // Simpan nama berkas dalam sesi
    $request->session()->put('berkas.Ijazah', $berkas['Ijazah']->getClientOriginalName());
    $request->session()->put('berkas.foto', $berkas['foto']->getClientOriginalName());
    $request->session()->put('berkas.prestasi', $berkas['prestasi']->getClientOriginalName());
    $request->session()->put('berkas.KK', $berkas['KK']->getClientOriginalName());
    $request->session()->put('berkas.KTPORANGTUA', $berkas['KTPORANGTUA']->getClientOriginalName());
    // Set notifikasi flash
    $request->session()->flash('success', 'Berkas berhasil disimpan. Lanjutkan ke tahap berikutnya.');

    return redirect('PPDB/pengisian-berkas');
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


   
    

public function saveDataPPDB(Request $request)
{
    // Validasi input formulir di sini jika diperlukan

    // Simpan data formulir ke dalam database
    $data = new dataPPDB();
    $data->nama = $request->input('nama');
    $data->email = $request->input('email');
    $data->Tempat_lahir = $request->input('Tempat_lahir');
    $data->Tanggal_Lahir = $request->input('Tanggal_Lahir');
    $data->alamat = $request->input('alamat');
    // Sesuaikan dengan kolom-kolom di tabel database

    // Simpan berkas yang diunggah
    $berkas = session('berkas');
    if ($berkas) {
        $data->ijazah = $this->uploadFileToDatabase($request, 'Ijazah', $berkas);
        $data->foto_3x5 = $this->uploadFileToDatabase($request, 'foto', $berkas);
        if ($request->hasFile('prestasi')) {
            $data->prestasi = $this->uploadFileToDatabase($request, 'prestasi', $berkas);
        } else {
            $data->prestasi = null; // Atau kosongkan sesuai konfigurasi database Anda
        }
        $data->KK = $this->uploadFileToDatabase($request, 'KK', $berkas);
        $data->ktp = $this->uploadFileToDatabase($request, 'KTPORANGTUA', $berkas);
    }

    $data->save();

    // Setelah data tersimpan, Anda bisa menghapus berkas dari session
    $request->session()->forget('berkas');

    // Atau, Anda dapat mengatur notifikasi sesuai dengan kebutuhan Anda.
    return redirect('/PPDB')->with('success', 'Data dan berkas berhasil diunggah. Silakan cek email Anda untuk melihat nomor pendaftaran.');
}

private function uploadFileToDatabase($request, $fieldName, $berkas)
{
    if ($request->hasFile($fieldName)) {
        // Simpan berkas yang diunggah ke dalam folder public/dataPPDB
        $path = $request->file($fieldName)->store('dataPPDB', 'public');

        // Path yang disimpan dalam database adalah path lengkap
        return 'dataPPDB/' . $path;
    } elseif (isset($berkas[$fieldName])) {
        // Jika berkas sudah ada di session, gunakan path yang sudah ada
        return $berkas[$fieldName];
    }

    return null;
}


    
}
