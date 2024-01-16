<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');
        $infologin = [
            'email' => $request->email,
            'password' =>$request->password,

        ];

        if (Auth::attempt($infologin)) {
            // echo "sukses";
            // exit();
            $role = Auth::user()->role;

            switch ($role) {
                case 'Admin':
                    // return redirect()->route('admin.home');
                    return view('admin.home');
                    break;
                case 'Dokter':
                    return view('dokter.home');
                    break;
                // Tambahkan case untuk peran lainnya jika diperlukan
                default:
                    return view('pasien.home');
                    break;
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
