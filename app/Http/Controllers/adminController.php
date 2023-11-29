<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPPDB;
use App\Mail\SendEmail;
use App\Mail\Tolak;
use Symfony\Component\Mime\Part\TextPart;
use Illuminate\Support\Facades\Mail;


class adminController extends Controller
{
    public function dataPDB()
    {   
        $data = dataPPDB::all();
        return view('admin.dashboard', ['banyak_data' => $data]);
    }



    public function kirimNotifikasiTerima(Request $request)
    {
        // dd($request->all());
        $email = new SendEmail();

        // alamat email 
        $alamatEmail = $request->input('email');
        Mail::to($alamatEmail)->send(new $email);

        // Set notifikasi flash kepada user
        $request->session()->flash('success', 'Email ke ' . $alamatEmail . ' berhasil dikirim - penerimaan');
        return redirect('/admin/daftar-ppdb');

    }

    public function kirimNotifikasiTolak(Request $request)
    {
        // dd($request->all());
        $email = new Tolak();

        // alamat email 
        $alamatEmail = $request->input('email');
        Mail::to($alamatEmail)->send(new $email);

        // Set notifikasi flash kepada user
        $request->session()->flash('success ', 'Email ke ' . $alamatEmail . ' berhasil dikirim - penolakan');
        return redirect('/admin/daftar-ppdb');

    }

    // MENGHAPUS DATA 
    public function cabutLaporan($email)
    {
        $CabutLaporan = dataPPDB::find($email);
        $CabutLaporan->delete();

        // notifikasi cabtu laporan 
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('admin/daftar-akun');

    }
    
}
