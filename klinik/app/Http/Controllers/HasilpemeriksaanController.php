<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPemeriksaan;
use App\Models\Dokter;
use App\Models\Pasien;

class HasilpemeriksaanController extends Controller
{
    public function home(){
        $hasilpemeriksaans = HasilPemeriksaan::all();
        return view('dokter.dokterpemeriksaan', compact('hasilpemeriksaans'));
    }

    public function create(){
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        return view('dokter.createhasilpemeriksaan', compact('dokters', 'pasiens'));
    }

    public function store(Request $request){
        $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required'
        ]);

        $hasilpemeriksaans = HasilPemeriksaan::create([
            'dokter_id' => $request->input('dokter_id'),
            'pasien_id' => $request->input('pasien_id'),
            'jenis_pemeriksaan' => $request->jenis_pemeriksaan,
            'diagnosa' => $request->diagnosa,
            'obat' => $request->obat
        ]);
        return redirect('/dokterpemeriksaan')->with('success', 'Jadwal dokter created successfully.');
    }
}
