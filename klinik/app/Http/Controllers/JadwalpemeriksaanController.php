<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalPemeriksaan;
use Illuminate\Http\Request;

class JadwalpemeriksaanController extends Controller
{
    public $jadwal_pemeriksaan_id;

    public function home()
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::all();
        $dokter = Dokter::all();
        return view('admin.jadwalpemeriksaan', compact('jadwalpemeriksaan'));
    }
    
    public function edit($jadwal_pemeriksaan_id)
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::findOrFail($jadwal_pemeriksaan_id);
        $dokter = Dokter::all();
        return view('admin.editjadwalpemeriksaan', compact('jadwalpemeriksaan'));
    }

    public function update(Request $request, $jadwal_pemeriksaan_id)
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::where('jadwal_pemeriksaan_id', $jadwal_pemeriksaan_id)->update([
            'dokter_id' => $request->dokter->name,
            'pasien_id' => $request->pasien->name,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'status' => $request->status
        ]);
        return redirect('/jadwalpemeriksaan')->with('success', 'Jadwal Pemeriksaan updated successfully.');
    }
}
