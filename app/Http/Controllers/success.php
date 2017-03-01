<?php

namespace App\Http\Controllers;
use App\File;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class success extends Controller
{
    public function downloadlink(){
        $data = \Session::get('products');
        $data = array_unique($data);
        $result=array();
        foreach ($data as $dd){
            $result[]=Product::find($dd);
        }
    foreach ($result as $r){
        response()->download($r->imageurl);
    }



    }

}


