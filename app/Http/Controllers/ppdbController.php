<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formDataDiriPPDB;
use App\Http\Requests\fromUploadFilePPDB;


class ppdbController extends Controller
{
    // data diri ppdb
    public function IsianPPDB(formDataDiriPPDB $request){

        // kirim data ke halaman lain 
        $data = $request->all();
        $request->session()->put('data', $data);
        return redirect('PPDB/pengisian-data-diri');
    }

    // file upload
    public function uploadFile(fromUploadFilePPDB $request){
        $data = $request->all();
        dump($data);
    }

    public function saveDataPPDB(Request $request){
        $data = $request->all();
        dump($data);
    }
}
