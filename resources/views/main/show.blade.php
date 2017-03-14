@extends('layouts.master')

@section('content')

    @foreach($result as $product)
        <h1>{{$product->id}}</h1>
        <h2>{{$product->name}}</h2>
        <h3>{{$product->description}}</h3>
        <h4>{{$product->price}}</h4>
        <h5>{{$product->imgurl}}</h5>
        <h6>{{$product->file_id}}</h6>
    @endforeach
{{ print_r($string) }}

@endsection