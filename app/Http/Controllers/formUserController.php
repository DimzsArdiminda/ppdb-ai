<?php

namespace App\Http\Controllers;
use App\Models\Auth;

use Illuminate\Http\Request;

class formUserController extends Controller
{
    public function PendaftranUserBaru(Request $request){
        $data = new Auth;
        $data = [
            'name' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => $request->pass,
            'no_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ];
        Auth::create($data);
        // notifikasi bahwa akun sudah terdaftar
        $request->session()->flash('success', 'Akun berhasil dibuat, silahkan login.');
        return redirect('/');
    } 
}
