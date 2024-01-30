<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPemeriksaan;
use App\Models\Dokter;
use App\Models\Pasien;

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
            'dokter_id' => $request->input('dokter_id'),
            'pasien_id' => $request->input('pasien_id'),
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'status' => $request->status
        ]);
        return redirect('/jadwalpemeriksaan')->with('success', 'Jadwal Pemeriksaan updated successfully.');
    }
}
