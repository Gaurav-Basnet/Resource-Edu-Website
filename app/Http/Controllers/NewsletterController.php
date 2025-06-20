<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\subscriptionSend;
use Illuminate\Support\Facades\Mail;
class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        

        $email = $request->input('email');

   

         Mail::to('anotheruser20655@gmail.com')->send(new subscriptionSend($email));

        return back()->with('success', 'Subscription successful! Check your email.');
    }
}
