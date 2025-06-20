<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Mail\ApplicationReceived;
use Illuminate\Support\Facades\Mail;

class messageController extends Controller
{
    public function message(Request $request)
    {
        //  dd($request->all());
        // // ✅ Validation
        $validated=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        // ✅ Save to database
           Message::create($request->all());


                  Mail::to('anotheruser20655@gmail.com')->send(new ApplicationReceived($validated));

    return back()->with('success', 'Message Sent');
    }
}
