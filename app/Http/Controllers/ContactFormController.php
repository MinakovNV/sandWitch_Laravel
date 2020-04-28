<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        return view('contact/contacts');
    }

    public function store() {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('SandWitch@example.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('flash_message', 'Thank you for your message!');
    }
}
