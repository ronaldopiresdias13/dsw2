<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = ["TV", "Smartphone", "Tablet"];

    public function index(){

        return view('product')->with('products', $this->products);
    }

    public function addProduct($product){
        $this->products[] = $product;
        $this->index();
    }
}
