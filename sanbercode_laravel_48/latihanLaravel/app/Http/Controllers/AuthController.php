<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('page.from');
    }

    public function home(Request $request)
    {
        $namaDepan = $request->input('fname');
        $namaBelakang = $request->input('lname');
    
        return view('page.selamatDatang', ['namaDepan' => $namaDepan, 'namaBelakang' =>$namaBelakang]);
    }
}
