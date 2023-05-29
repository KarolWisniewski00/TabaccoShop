<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends FilterController
{
    public function show($url)
    {
        $category = Category::where('url', '=', $url)->get()->first();
        $products = Product::where('category_id', '=', $category->id)->get();
        $categories = Category::get();
        $categories = $this->addCount($categories);
        $max = $this->getMax($products, 0);

        return view('client.category.show', [
            'url' => $url,
            'products' => $products,
            'categories_count' => $categories,
            'max' => $max
        ]);
    }
}
