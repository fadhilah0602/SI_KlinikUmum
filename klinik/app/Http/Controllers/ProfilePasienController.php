<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilePasienController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('pasien.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // $user = Auth::user()->id;

        //     $user = User::where('id', $id)->update([
        //     // 'user_id' =>  $user->id,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        // return redirect('/pasienprofile')->with('success', 'User updated successfully.');
        $user = User::where('id', $id)->update([
            // 'user_id' =>  $user->id,
            'name' => Auth::user()->$request->name,
            'email' => Auth::user()->$request->email,
            'password' => Auth::bcrypt($request->password),
            'role' => $request->role
        ]);
        return redirect('/user')->with('success', 'User updated successfully.');
    }

}
