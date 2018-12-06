<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shop.index', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('shop.singleProduct', compact('product'));
    }

    public function orderProduct()
    {

    }
}
