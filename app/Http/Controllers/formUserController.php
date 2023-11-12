<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AuthReq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\daftar_akun;
use App\Http\Middleware\CheckRole;


class formUserController extends Controller
{
    public function PendaftranUserBaru(Request $request){
        // dd($request->all());
        $data = new daftar_akun();
        $data = [
            'name' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => $request->pass,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ];
        daftar_akun::create($data);
        // notifikasi bahwa akun sudah terdaftar
        $request->session()->flash('success', 'Akun berhasil dibuat, silahkan login.');
        return redirect('/');
    } 

    // auth dan session
    public function AuthSession(Request $request)
{
    // Pemeriksaan untuk admin
    if ($request->email === "admin@sekolah" && $request->password === "admin") {
        // role
        $request->session()->put('role', 'admin');
        return redirect('admin/daftar-akun');
    }

    // Pemeriksaan untuk pengguna biasa
    $pengguna = daftar_akun::where('email', $request->email)->first();
    
    if ($pengguna && $pengguna->password === $request->password) {
        // Pengguna telah diautentikasi
        $dataAmbilDatabase = [
            'nama' => $pengguna->name,
            'email' => $pengguna->email,
        ];
        // role
        $request->session()->put('role', 'pengguna');
        $request->session()->put('data', $dataAmbilDatabase);
        return redirect('/dashboard');
    } else {
        // kembali ke halaman awal jika gagal login
        $request->session()->flash('error', 'Email atau password salah');
        return redirect('/');
    }
}

    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout'); // Redirect ke halaman login atau halaman lain yang sesuai
    }


}
