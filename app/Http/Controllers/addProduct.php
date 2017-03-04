<?php

namespace App\Http\Controllers;


class addProduct extends Controller
{

    public function addbaskets($id)
    {
        if (\Session::has('products')) {
            $products = \Session::get('products');
            array_push($products, $id);
        } else {
            $products = array(
                $id,
            );
        }
        \Session::put('products', $products);

        return redirect('/show');
    }

    public function removebaskets($id)
    {
        $products = \Session::get('products');
        $data = array_unique($products);
        if(($key = array_search($id, $data)) !== false) {
            unset($data[$key]);
        }
        \Session::forget('products');
        \Session::put('products',$data);
        return redirect('/');
    }
}

