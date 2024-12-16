<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create()
    {
        return view('cast.tambah');
    }
    public function inputCast(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        // Insert data ke database
        DB::table('cast')->insert([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio')
        ]);
        // arahkan ke halama /cast
        return redirect('/cast');
    } 

    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.tampil', ['cast' => $cast]); 
    }

    public function show($id)
    {
        $castData = DB::table('cast')->find($id);
        return view('cast.detail', ['castData' => $castData]); 
    }

    public function edit($id)
    {
        $castData = DB::table('cast')->find($id);
        return view('cast.edit', ['castData' => $castData]); 
    }

    public function update($id, Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        // Update data
        DB::table('cast')
              ->where('id', $id)
              ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio')
                ]);
        // redirect halaman
        return redirect('/cast');
    }
    public function destroy($id)
    {
        $deleted = DB::table('cast')->where('id', '=', $id)->Delete();

        return redirect('/cast');
    }
}
