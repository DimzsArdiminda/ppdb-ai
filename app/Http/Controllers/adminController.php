<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPPDB;

class adminController extends Controller
{
    public function dataPDB()
    {   
        $data = dataPPDB::all();
        return view('admin.dashboard', ['banyak_data' => $data]);
    }
}
