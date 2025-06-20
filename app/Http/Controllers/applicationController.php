<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Mail\ApplicationReceived;
use Illuminate\Support\Facades\Mail;


class applicationController extends Controller
{
    public function store(Request $request)
{
    // dd($request->all());


     $validated=$request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'dob' => 'required|date',

        'country' => 'required|string',
        'course' => 'required|string',
        'level' => 'required|string',
        'intake_year' => 'required|string',
        'intake_season' => 'required|string',

        'current_education' => 'required|string',
        'institution' => 'required|string',
        'gpa' => 'required|string',
        'grad_year' => 'required|string',

        'budget' => 'required|string',
        'english_level' => 'required|string',
        'test_scores' => 'nullable|string',
        'passport' => 'required|string',
        'message' => 'nullable|string',
        'newsletter' => 'string',
    ]);



    Application::create($request->all());



 // Send Email to your specified address
    Mail::to('anotheruser20655@gmail.com')->send(new ApplicationReceived($validated));

    return back()->with('success', 'Application submitted succesfully');
}

}