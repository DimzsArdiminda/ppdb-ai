<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Pastikan namespace yang benar

class FiturController extends Controller
{
    public function handleSearch(Request $request) {
        $query = $request->input('query');
    
        // Contoh: Melakukan pencarian posting berdasarkan judul
        $results = Post::where('title', 'like', '%' . $query . '%')->get();
    
        // Mengembalikan view dengan hasil pencarian
        return view('dashboard.dashboard', ['query' => $query, 'results' => $results]);
    }
}
