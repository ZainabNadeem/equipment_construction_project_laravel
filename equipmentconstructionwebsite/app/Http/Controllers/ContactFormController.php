<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        // Your email sending logic here
        $receiving_email_address = 'contact@example.com';

        $contact = new PHP_Email_Form();
        $contact->ajax = true;
        
        $contact->to = $receiving_email_address;
        $contact->from_name = $request->input('name');
        $contact->from_email = $request->input('email');
        $contact->subject = $request->input('subject');

        // SMTP configuration (if needed)
        // ...

        $contact->add_message($request->input('name'), 'From');
        $contact->add_message($request->input('email'), 'Email');
        $contact->add_message($request->input('message'), 'Message', 10);

        return $contact->send() ? 'Email sent successfully!' : 'Email sending failed!';
   

    }
}
