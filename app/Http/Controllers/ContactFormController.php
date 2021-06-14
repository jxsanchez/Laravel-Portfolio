<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Send email
        Mail::to('jxasanchez@gmail.com')->send(new ContactFormMail($data));

        return redirect("/#contact")->with('success-msg', 'Your message has been received, thank you!');
    }
}
