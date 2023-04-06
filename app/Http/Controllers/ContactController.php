<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //INDEX CONTACT
    public function contact()
    {
        return view('static.contact');
    }
}
