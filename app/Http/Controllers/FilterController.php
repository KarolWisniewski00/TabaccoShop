<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
    public function addCount($categories)
    {
        foreach ($categories as $cat) {
            $prod = Product::where('category_id', '=', $cat->id)->get();
            $cat->count = count($prod);
        }
        return $categories;
    }
    public function updateMax($max, $price)
    {
        if ($max < $price) {
            $max = $price;
        }
        return $max;
    }
    public function updateMaxByPrice($product, $max)
    {
        if ($product->sale_price != 0) {
            $max = $this->updateMax($max, $product->sale_price);
        } else {
            $max = $this->updateMax($max, $product->normal_price);
        }
        return $max;
    }
    public function getMax($products, $max)
    {
        foreach ($products as $product) {
            $max = $this->updateMaxByPrice($product, $max);
        }
        return $max;
    }
}
