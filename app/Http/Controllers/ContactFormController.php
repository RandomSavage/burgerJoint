<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller {

    public function create() {
      return view('contact.contact-form');
    }

    public function store() {
      // dd(request()->all());
      $data =request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
      ]);

      Mail::to('test@test.com')->send(new ContactFormMail($data));

      return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
