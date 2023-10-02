<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ppdbController extends Controller
{
    public function IsianPPDB(Request $request){
        $data = $request->all();
        dump($data);
    }
}
