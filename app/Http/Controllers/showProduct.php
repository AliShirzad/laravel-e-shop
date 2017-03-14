<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Product;

class showProduct extends Controller
{
    public function show()
    {
        $data = \Session::get('products');
        $data = array_unique($data);
        $result = array();
        foreach ($data as $dd) {
            $result[] = Product::find($dd);
        }

        return view('main.basket' , compact('result', 'data'));
//            compact($data , $result));
    }

}
