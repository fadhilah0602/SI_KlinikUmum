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
    public function homepasien(){
        $hasilpemeriksaans = HasilPemeriksaan::all();
        return view('pasien.riwayat', compact('hasilpemeriksaans'));
    }
    public function homeadmin(){
        $hasilpemeriksaans = HasilPemeriksaan::all();
        return view('admin.hasilpemeriksaan', compact('hasilpemeriksaans'));
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

    public function edit($hasil_pemeriksaan_id)
    {
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        $hasilpemeriksaan = HasilPemeriksaan::findOrFail($hasil_pemeriksaan_id);
        return view('dokter.edithasilpemeriksaan', compact('hasilpemeriksaan','pasien','dokter'));
    }

    public function update(Request $request, $hasil_pemeriksaan_id)
    {
        $hasilpemeriksaan = HasilPemeriksaan::where('hasil_pemeriksaan_id', $hasil_pemeriksaan_id)->update([
            'jenis_pemeriksaan' => $request->jenis_pemeriksaan,
            'diagnosa' => $request->diagnosa,
            'obat' => $request->obat
        ]);
        return redirect('/dokterpemeriksaan')->with('success', 'Hasil Pemeriksaan updated successfully.');
    }

    public function destroy($hasil_pemeriksaan_id)
    {
        $hasilpemeriksaan = HasilPemeriksaan::where('hasil_pemeriksaan_id', $hasil_pemeriksaan_id)->first();
        $hasilpemeriksaan->delete();
        return redirect('/dokterpemeriksaan')->with('success', 'Hasil pemeriksaan deleted successfully.');
    }
}
