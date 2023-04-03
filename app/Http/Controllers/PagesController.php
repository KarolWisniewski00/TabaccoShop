<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pages($url){
        return view('pages', [
            'url'=>$url
        ]);
    }
}
