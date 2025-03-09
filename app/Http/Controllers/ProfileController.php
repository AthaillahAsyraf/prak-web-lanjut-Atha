<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $nama = "Athaillah Asyraf";
        $kelas = "MI";
        $npm = "2377051008";
    
        return view('profile', compact('nama', 'kelas', 'npm'));
    }
    
}

