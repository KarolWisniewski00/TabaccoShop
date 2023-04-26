<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->get();
        $products = Product::inRandomOrder()->where('category_id', '=', $product[0]->category_id)->whereNotIn('id', [$id])->take(4)->get();
        return view('client.product.show', [
            'category_id' => $product[0]->category_id,
            'product' => $product[0],
            'products' => $products
        ]);
    }
}
