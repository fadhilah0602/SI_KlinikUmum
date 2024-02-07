<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    function index()
    {
        return view('signup');
    }
    public function signup(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);
        return view('signup');

    }
}
