<?php

namespace Sahadat\Mailman\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Mailship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sahadat\Mailman\Mail\Mailship as MailMailship;
use Sahadat\Mailman\Models\Mailer;

class MailerController extends Controller
{
    public function index(){
        return view('mailman::mailer');
    }

    public function send(Request $request){


        // Mail::to('hello@gmail.com')->mailship::send($request->name,$request->email,$request->message);

        Mail::to("$request->email")->send(new MailMailship($request->name,$request->message));

        Mailer::create($request->all());

        return redirect('/mail');
    }
}
