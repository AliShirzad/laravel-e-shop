<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\View;


class MainController extends Controller
{


    public function index(Request $request)
    {

        $products = Product::all();
        return view('main.index',['products' => $products]);
    }


}
