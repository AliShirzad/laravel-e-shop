<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');


Route::get('/admin/product/new', 'ProductController@newProduct');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
Route::post('/admin/product/save', 'ProductController@add');

Route::get('/addProduct/add/{id}','addProduct@addbaskets');
Route::get('/addProduct/remove/{id}','addProduct@removebaskets');

Route::get('/success', 'success@downloadlink');

Route::get('/show', 'showProduct@show');


Route::get('/something', 'ProductController@UploadPhoto');

//Route::get('fileentry', 'FileEntryController@index');
//
//Route::get('fileentry/get/{filename}', [
//    'as' => 'getentry',
//    'uses' => 'FileEntryController@get']);
//
//Route::post('fileentry/add',[
//    'as' => 'addentry',
//    'uses' => 'FileEntryController@add']);



