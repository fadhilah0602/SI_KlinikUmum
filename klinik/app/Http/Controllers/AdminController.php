<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Dokter;
use App\Models\User;
use App\Models\JadwalPemeriksaan;
use App\Models\Pasien;
use App\Models\Ruang;

class AdminController extends Controller
{
    public function home()
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::all();
        return view('admin.home', compact('jadwalpemeriksaan'));
    }
    public function render()
    {
        $totalpasien = Pasien::all()->count();
        $totaldokter = Dokter::all()->count();
        $totalpoli = Ruang::all()->count();
        $totalantrean = JadwalPemeriksaan::all()->count();
        return view('admin.home', compact('totalpasien', 'totaldokter', 'totalpoli', 'totalantrean'));
    }
}
