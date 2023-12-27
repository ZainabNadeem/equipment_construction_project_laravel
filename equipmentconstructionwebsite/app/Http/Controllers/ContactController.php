<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }


    public function submitContactForm(Request $request)
{
    // Validate form inputs
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    // Process the validated form data
    $name = $validatedData['name'];
    $email = $validatedData['email'];
    $message = $validatedData['message'];

    // Example: Sending an email (you'd need an email library or service)
    Mail::to('your@email.com')->send(new ContactFormMail($name, $email, $message));

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Message sent successfully!');
}

}
