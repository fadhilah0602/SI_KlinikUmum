<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function home()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    public function create()
    {

        $contacts = Contact::all();
        return view('home', compact('contacts'));
    }

    public function store(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect('/')->with('success', 'Contact created successfully.');
    }
}
