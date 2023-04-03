<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class PagesController extends Controller
{
    public function pages($url){
        $category = Category::where('url' ,'=', $url)->get();
        $products = Product::where('category_id' ,'=', $category[0]->id)->get();
        return view('pages', [
            'url'=>$url,
            'products'=>$products
        ]);
    }
}
