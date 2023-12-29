<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    //
    public function index(){
        return view('Career');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'required|string|max:1000',
        ]);

        // Process the form data (for example, save to database, send email, etc.)
        // Access form data using $validatedData['field_name']

        // You can perform further actions here, such as storing the data to the database

        // Redirect back or to a success page after submission
        return redirect()->route('career.thankyou');
    }
}
