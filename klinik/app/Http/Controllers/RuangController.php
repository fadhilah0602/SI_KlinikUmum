<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Dokter;

class RuangController extends Controller
{
    public function home()
    {
        $ruangs = Ruang::all();
        return view('admin.poli', compact('ruangs'));
    }

    public function create()
    {
        
        $dokters = Dokter::all();
        return view('admin.createpoli', compact('dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required',
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        $ruang = Ruang::create([
            'dokter_id' => $request->input('dokter_id'),
            'nama_ruangan' => $request->nama_ruangan,
            'jenis_ruangan' => $request->jenis_ruangan   
        ]);

        return redirect('/poli')->with('success', 'Poli created successfully.');
    }
}
