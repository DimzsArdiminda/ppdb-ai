<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\fromPPDBReq;


class berkasUploadController extends Controller
{
    public function uploadFile(fromPPDBReq $request){
        $data = $request->all();
        dump($data);
    }
}
