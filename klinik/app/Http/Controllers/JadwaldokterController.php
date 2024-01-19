<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDokter;
use App\Models\Dokter;

class JadwaldokterController extends Controller
{
    public function home(){
        $jadwaldokters = JadwalDokter::all();
        return view('admin.jadwaldokter', compact('jadwaldokters'));
    }

    public function create(){
        $dokters = Dokter::all();
        return view('admin.createjadwaldokter', compact('dokters'));
    }

    public function store(Request $request){
        $request->validate([
            'dokter_id' => 'required',
        ]);

        $jadwaldokters = JadwalDokter::create([
            'dokter_id' => $request->input('dokter_id'),
            'hari' => $request->hari,
            'waktu' => $request->waktu   
        ]);

        return redirect('/jadwaldokter')->with('success', 'Jadwal dokter created successfully.');
    }
}
