<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index')->with('admins',$admin);
    }

    public function create()
    {
        $admin = Admin::select('name')
                        ->join('users','admins.user_id','users.id')
                        ->get();
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Admin::create($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        $admin = Admin::create([
            'user_id' =>  $user->id,
            'name' => $request->name
        ]);
        return redirect('/admin')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        $admin = Admin::where('user_id',$id)->first();
        return view("admin.edit")
            ->with('users',$user)
            ->with('admins',$admin);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);

        $admin = Admin::where('user_id',$id)->update([
            'user_id' =>  $user->id,
                'name' => $request->name
            ]);

        $admin->update($request->all());
        return redirect('/admin')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $id->delete();
        return redirect('/admin')->with('success', 'Admin deleted successfully.');
    }
}
