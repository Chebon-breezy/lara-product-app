<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listproduct(){
        return view('product.addproduct');
    }

    //show all products
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    // store new listing
    public function createproduct(Request $request){
        $formFields = $request->validate([
            'name' =>'required',
            'description' =>'required',
            'price' =>'required'
        ]);

        Product::create($formFields);

        return redirect('/products')->with('message', 'Product created Successfully!');
    }
}
