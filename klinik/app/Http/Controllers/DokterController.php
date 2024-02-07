<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Dokter;
use App\Models\HasilPemeriksaan;
use App\Models\JadwalPemeriksaan;
use App\Models\Pasien;
use App\Models\SuratKeterangan;
use App\Models\User;

class DokterController extends Controller
{
    public function home()
    {
        $dokters = Dokter::all();
        return view('admin.dokter', compact('dokters'));
    }

    public function homedokter()
    {
        $jadwalpemeriksaan = JadwalPemeriksaan::all();
        return view('dokter.home', compact('jadwalpemeriksaan'));
    }

    public function create()
    {

        $dokters = Dokter::all();
        return view('admin.createdokter', compact('dokters'));
    }
    public function store(Request $request)
    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $dokter = Dokter::create([
            'user_id' =>  $user->id,
            'nip' => $request->nip,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'spesialis' => $request->spesialis
        ]);
        return redirect('/admindokter')->with('success', 'Dokter created successfully.');
    }

    public function edit($dokter_id)
    {
        // $user = User::where('id', $id)->first();
        // $dokter = Dokter::where('user_id', $id)->first();
        // return view("dokter.edit")
        //     ->with('users', $user)
        //     ->with('dokters', $dokter);
        $dokter = Dokter::findOrFail($dokter_id);
        return view('admin.editdokter', compact('dokter'));
    }

    public function update(Request $request, $dokter_id)
    {
        // $user = User::where('id', $id)->update([
        //     'email' => $request->email,
        //     'name' => $request->name,
        // ]);

        $dokter = Dokter::where('dokter_id', $dokter_id)->update([
            // 'user_id' =>  $user->id,
            'nip' => $request->nip,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'spesialis' => $request->spesialis
        ]);

        // $dokter->update($request->all());
        return redirect('/admindokter')->with('success', 'Dokter updated successfully.');
    }

    public function destroy($dokter_id)
    {
        $dokter = Dokter::where('dokter_id', $dokter_id)->first();
        $dokter->delete();
        return redirect('/admindokter')->with('success', 'Dokter deleted successfully.');
    }

}
