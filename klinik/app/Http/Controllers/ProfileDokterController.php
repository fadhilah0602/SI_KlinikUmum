<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileDokterController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('dokter.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update([
            // 'user_id' =>  $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/dokterprofile')->with('success', 'Profile updated successfully.');

    }
}
