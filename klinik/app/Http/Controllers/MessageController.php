<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;



class MessageController extends Controller
{


    public function store(Request $request)
        {


            
            $message = Message::create([
                'message_id' =>  $request->message_id,
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
            return redirect('/home')->with('success', 'Message created successfully.');
        }
}

