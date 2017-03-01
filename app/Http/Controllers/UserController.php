<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{



    public function show(Request $request, $id)
    {
        if(session()->has('key')){
            echo 'key';
        }
    }


}
