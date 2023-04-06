<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnController extends Controller
{
    //INDEX RETURN
    public function return()
    {
        return view('static.return');
    }
}
