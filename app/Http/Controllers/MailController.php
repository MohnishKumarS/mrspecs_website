<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact_mail(Request $request){

    

        Mail::to('mrspecs@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('status', 'Your message has been sent successfully');
    }
}
