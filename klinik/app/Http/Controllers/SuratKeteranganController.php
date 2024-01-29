<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeterangan;
use App\Models\Pasien;
use App\Models\Dokter;

class SuratKeteranganController extends Controller
{
    public function home()
    {
        $dokumen = SuratKeterangan::all();


        return view('dokter.suratketerangan', compact('dokumen'));
    }

    public function create()
    {
        $dokumen = SuratKeterangan::all();
        $pasien = Pasien::all();
        $dokter = Dokter::all();

        return view('dokter.createsurat', compact('dokumen', 'pasien', 'dokter'));
    }


    public function store(Request $request)
    {
        $dokumen = SuratKeterangan::create([
            'dokter_id' => $request->dokter_id,
            'pasien_id' => $request->pasien_id,
            // 'nama_klinik' => $request->nama_klinik,
            'keterangan' => $request->keterangan,
            'waktu1' => $request->waktu1,
            'waktu2' => $request->waktu2,
        ]);

        return redirect('/suratketerangan')->with('success', 'Surat Keterangan created successfully.');
    }

    public function dokumen($surat_keterangan_id)
    {
        $dokumen = SuratKeterangan::find($surat_keterangan_id);
        return view('dokter.dokumen', compact('dokumen'));
    }
}
