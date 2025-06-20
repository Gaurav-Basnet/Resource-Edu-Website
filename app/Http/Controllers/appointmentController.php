<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use Illuminate\Http\Request;
use App\Mail\ApplicationReceived;
use Illuminate\Support\Facades\Mail;


class appointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'service' => 'required|string',
            'mode'    => 'required|string',
            'date'    => 'required|date',
            'time'    => 'required|string',
            'message' => 'nullable|string',
        ]);

         Appointment::create($request->all());

           Mail::to('anotheruser20655@gmail.com')->send(new ApplicationReceived($validated));

    return back()->with('success', 'Appointment Submitted');
    }
}

