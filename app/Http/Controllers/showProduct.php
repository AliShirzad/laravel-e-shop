<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\View;

class showProduct extends Controller
{
    public function show(){
        $products = Product::all();
        return view('main.show',['products' => $products]);
    }

}
