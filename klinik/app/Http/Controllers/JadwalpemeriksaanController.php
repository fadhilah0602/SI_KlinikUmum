<?php

namespace App\Http\Controllers;

use App\Models\JadwalPemeriksaan;
use Illuminate\Http\Request;

class JadwalpemeriksaanController extends Controller
{
    public $jadwal_pemeriksaan_id;

    public function home()
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::all();
        return view('admin.jadwalpemeriksaan', compact('jadwalpemeriksaan'));
    }

    // public function show($jadwal_pemeriksaan_id)
    // {
    //     $this->$jadwal_pemeriksaan_id = $jadwal_pemeriksaan_id;
    // }

    public function detail($jadwal_pemeriksaan_id)
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::find($jadwal_pemeriksaan_id);
        return view('admin.detailjadwalpemeriksaan', compact('jadwalpemeriksaan'));
    }
}
