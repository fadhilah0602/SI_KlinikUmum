<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Dokter;
use App\Models\User;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index')->with('dokters',$dokter);
    }

    public function create()
    {
        $dokter = Dokter::select('user_id','nip','name','tempat_lahir','tgl_lahir','gender','alamat','no_telp','spesialis')
                        ->join('users','dokters.user_id','users.id')
                        ->get();
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        // Pasien::create($request->all());

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
        return redirect('/dokter')->with('success', 'Dokter created successfully.');
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        $dokter = Dokter::where('user_id',$id)->first();
        return view("dokter.edit")
            ->with('users',$user)
            ->with('dokters',$dokter);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);

        $dokter = Dokter::where('user_id',$id)->update([
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

        $dokter->update($request->all());
        return redirect('/dokter')->with('success', 'Dokter updated successfully.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $id->delete();
        return redirect('/dokter')->with('success', 'Dokter deleted successfully.');
    }
}
