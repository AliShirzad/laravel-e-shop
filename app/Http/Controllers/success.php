<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class success extends Controller
{
    public function downloadlink(Request $request, $id){
        $data = \Session::get('products');
        $data = array_unique($data);

        $result=array();

        foreach ($data as $dd){
            $result[]=Product::find($dd);
        }

        $hashname = Product::all();

        $obj = array();
        foreach ($hashname as $hash){
            $obj[] = array(
                'id' => $hash->id,
                'name' => $hash->name,
                'file_id' => $hash->file_id,
                'result' => $hash->result,
            );
        }

        $boo = array();
        foreach ($obj as $ob =>$o){
            if($o['result'] == $id){
                $boo[] = $o['result'];
            }
        }

        session(['boo'=> $boo,
                'result' => $result]);




        return view('admin.Success', [
            'result' => $result,
        ]);

    }




    public function finalPage(Request $request, $id)
    {
        $pp = array();
        foreach (Product::all() as $product){
                $pp[] = $product['name'];
        }


        // 1. Zip all the selected file.

        if (\Session::get('products')){

            $zipper = new \Chumper\Zipper\Zipper;

            $files = glob(public_path('uploads/'.session('filename')));

            $zipper->make('storage/files.zip')->add($files);

            $download = response()->download(public_path('storage/files.zip'));

        // 2. Delete Session

            \Session::flush();


         // 3. Delete the result($string) in the database.

            $deleteString = Product::where('result', $id)->update(['result' => 1]);


            return $download;
        } else {
            return redirect('/');
        }
    }
}


