<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    //INDEX RULES
    public function rules()
    {
        return view('static.rules');
    }
}
