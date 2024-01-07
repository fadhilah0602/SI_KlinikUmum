<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        return view('dokters.create');
    }

    public function store(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->route('dokters.index')->with('success', 'Dokter created successfully.');
    }

    public function edit(Dokter $dokter)
    {
        return view('dokters.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter)
    {
        $dokter->update($request->all());
        return redirect()->route('dokters.index')->with('success', 'Dokter updated successfully.');
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        return redirect()->route('dokters.index')->with('success', 'Dokter deleted successfully.');
    }
}
