<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products =  Product::all();
        return view('pages.products.index', compact('products'));
    }
    public function create()
    {
        return view('pages.addProduct.index');
    }
    public function store(Request $request)
    {

        // dd($request->all());
        // Product::create([
        //     'product_name' => $request->name,
        //     'price' => $request->price,
        //     'desciption' => $request->description,
        //     'discount_percent' => 'hello'
        // ]);


        $product = new Product();
        $product->product_name = $request->name;
        $product->price = $request->price;
        $product->desciption = $request->description;
        $product->discount_percent = 'aaaaaa';
        $product->save();

        return view('pages.products.index');
        // Logic for storing the product
    }
}
