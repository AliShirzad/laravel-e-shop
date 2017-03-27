<?php

namespace App\Http\Controllers;

use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Validator;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products',['products' => $products]);
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/admin/products');
    }

    public function newProduct(){
        return view('admin.new');
    }

    public function add()
    {


//        $file = Request::file('file');
//        $extension = $file->getClientOriginalExtension();

//        $product = Product::all();
//        return print_r($product);
        if (Input::hasFile('image')) {
            $file = array('image' => Input::file('image'));
            $rules = array('image' => 'required|max:100000|mimes:jpeg,JPEG,PNG,png');
            $messages = [
                'image.required' => 'آپلود تصویر اجباری است ',
                'image.max' => 'حجم فایل بسیار زیاد است ',
                'image.mimes' => 'فرمت فایل شما ساپورت نمیشود.',
            ];
            $validator = Validator::make($file, $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                session(['filename' => $fileName]);
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            } else {
            }
        } else {
            return 0;
        }

//        $entry = new \App\File();
//
//        $entry->mime = $file->getClientMimeType();
//        $entry->original_filename = $file->getClientOriginalName();
//        $entry->filename = $file->getFilename().'.'.$extension;
//
//        $entry->save();
//
        $post = Input::All();

        $product  = new Product();


        $product->file_id= $destinationPath.'/'.$fileName;

        $product->name = $post['name'];
        $product->description = $post['description'];
        $product->price = $post['price'];

        $product->save();

        return redirect('/admin/products');

    }


}
