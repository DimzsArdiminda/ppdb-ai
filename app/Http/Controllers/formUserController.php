<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formUserController extends Controller
{
    public function PendaftranUserBaru(Request $request){
        $data = $request->all();
        dump($data);
    } 
}
