<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    //INDEX INDEX
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('index', [
            'products' => $products
        ]);
    }
}
