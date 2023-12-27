<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        // You can pass any necessary data to the view here
        return view('about_us');
       
    }
}