<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{



    public function show(Request $request, $id)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $random_string_length = rand(16, 20);
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        \App\Product::where('id', $id)
            ->update(['file_num' => $string]);

        return redirect()->action('showProduct@show');
    }


}
