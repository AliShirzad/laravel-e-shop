<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class addProduct extends Controller
{

    public function addbaskets(Request $request, $id)
    {
        if(\Session::has('products'))
        {
           $products=\Session::get('products');
            array_push($products,$id);
        }
        else{
            $products=array(
              $id,
            );
        }
        \Session::put('products',$products);
        $data = \Session::get('products');
        $data = array_unique($data);
        $result=array();
        foreach ($data as $dd){
            $result[]=Product::find($dd);
        }
        return view('main.basket')->with('result',$result);
    }

    public function removebaskets(Request $request, $id){
        if(\Session::has('products'))
        {
            $products=\Session::get('products');
            array_pop($products, $id);
        }
    }
}
