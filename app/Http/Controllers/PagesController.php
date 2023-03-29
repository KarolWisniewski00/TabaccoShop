<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pages($name){
        return view('pages', [
            'name'=>$name
        ]);
    }
}
