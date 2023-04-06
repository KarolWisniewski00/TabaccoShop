<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //INDEX ABOUT
    public function about()
    {
        return view('static.about');
    }
}
