<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // public function index()
    // {
    //     $user = User::all();
    //     return view('admin.user')->with('users',$user);
    // }
    public function home()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function create()
    {
        $user = User::select('name')->get();
        return view('admin.createuser');
    }

    public function store(Request $request)
    {
        // Admin::create($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => $request->email_veridied_at,
            'password' => bcrypt($request->password),
            'role' => $request->role

        ]);
        return redirect('/user')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view("admin.edituser")
            ->with('user',$user);
    }

    // public function update(Request $request, $id)
    // {
    //     $user = User::where('id',$id)->update([
    //         'email' => $request->email,
    //         'name' => $request->name,
    //     ]);

    //     $user->update($request->all());
    //     return redirect('/user')->with('success', 'User updated successfully.');
    // }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update([
            // 'user_id' =>  $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);
        return redirect('/user')->with('success', 'User updated successfully.');
    }

    // public function destroy($id)
    // {
    //     $user = User::find($id);
    //     $id->delete();
    //     return redirect('/user')->with('success', 'User deleted successfully.');
    // }
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/user')->with('success', 'User deleted successfully.');
    }
}
