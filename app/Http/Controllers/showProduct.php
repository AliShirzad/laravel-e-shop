<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;


class showProduct extends Controller
{
    public function show(Request $request)
    {
        $data = \Session::get('products');
        $data = array_unique($data);
        $result = array();
        foreach ($data as $dd) {
            $result[] = Product::find($dd);
        }



//        $obj = array();
//        foreach ($result as $rr){
//            $obj[] = array($string, $rr->file_id);
//            $prod = Product::find($rr->id)->orderBy('name', 'desc');
//            $prod->file_num = $obj;
//            $prod->save();
//        }
//        $dataSet = [];
//        foreach ($result as $rr) {
//            $dataSet[] = [
//                'file_id'    => $rr->file_id,
//                'file_num' => $string
//            ];
//        }
//
//        DB::table('products')->insert($dataSet);

        function alphaNumeric(){
            $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $string = '';
            $random_string_length = rand(16, 20);
            $max = strlen($characters) - 1;
            for ($i = 0; $i < $random_string_length; $i++) {
                $string .= $characters[mt_rand(0, $max)];
            }
            return $string;
        }

        $string = alphaNumeric();

        $obj = array();
        foreach ($data as $pp){
//            if(count($dd) > 1){
            $prodcut = Product::find($pp);
            $prodcut->result = $string;
            $prodcut->save();
//            }else {

//            }
        }



        return view('main.basket' , compact('result', 'dd', 'string' ));

    }

}
