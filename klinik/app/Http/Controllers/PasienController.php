<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pasien;
use App\Models\User;

class PasienController extends Controller
{
    public function home()
    {
        $pasiens = Pasien::all();
        return view('admin.pasien', compact('pasiens'));
    }

    public function create()
    {
        // $pasiens = Pasien::select('user_id', 'name', 'tempat_lahir', 'tgl_lahir', 'gender', 'alamat', 'no_telp')
        //     // ->join('users', 'pasiens.user_id', 'users.id')
        //     ->get();
        $pasiens = Pasien::all();
        return view('admin.createpasien', compact('pasiens'));
    }

    public function store(Request $request)
    {
        // Pasien::create($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        // $user = User::create([
        //     'id' => $request->id
        // ]);

        $pasiens = Pasien::create([
            'user_id' =>  $user->id,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);
        return redirect('/adminpasien')->with('success', 'Pasien created successfully.');
    }

    public function edit($pasien_id)
    {
        // $user = User::where('id', $id)->first();
        // $pasien = Pasien::where('user_id', $id)->first();
        // return view("pasien.edit")
        //     // ->with('users', $user)
        //     ->with('pasiens', $pasien);
        $pasien = Pasien::findOrFail($pasien_id);
        return view('admin.editpasien', compact('pasien'));
    }

    public function update(Request $request, $pasien_id)
    {
        $pasien = Pasien::where('pasien_id', $pasien_id)->update([
            // 'user_id' =>  $user->id,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);
        return redirect('/adminpasien')->with('success', 'Pasien updated successfully.');
    }

    public function destroy($pasien_id)
    {
        $pasien = Pasien::where('pasien_id', $pasien_id)->first();
        $pasien->delete();
        return redirect('/adminpasien')->with('success', 'Pasien deleted successfully.');
    }
}
