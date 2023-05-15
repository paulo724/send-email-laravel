<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Mail::to('paulo.henrique724.ph@gmail.com', 'Paulo H')->send(new Contact([
            'fromName' => $request->input('inputName'),
            'fromEmail' => $request->input('inputEmail'),
            'subject' => $request->input('inputSubject'),
            'message' => $request->input('inputMessage'),
        ]));

        var_dump('email send');
    }
}
