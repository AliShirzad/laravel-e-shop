<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{



    public function index(Request $request, $id)
    {


        $product = Product::all();
        if($product->id == $id){
            return redirect('/show');
        }else {
            return redirect('/');
        }




    }


}
