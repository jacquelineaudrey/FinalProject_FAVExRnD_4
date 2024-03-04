<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products')->with('products', Product::all());
    }
    public function cart(){
        return view('cart');
    }
    public function addToCart(Product $product){
        
    }
    public function removeFromCart($id){

    }
}
