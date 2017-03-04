<?php

namespace App\Http\Controllers;

use App\Product;
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

        return view('admin.Success', [
            'result' => $result,
            'path' => $path
        ]);
    }

}


