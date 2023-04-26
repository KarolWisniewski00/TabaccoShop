<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusketController extends Controller
{
    public function index()
    {
        return view('client.account.busket.index');
    }
}
