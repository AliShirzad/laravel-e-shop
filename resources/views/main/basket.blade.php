@extends('layouts.master')

@section('content')

    <ul>
    @foreach($result as $r)


        <img src="{{$r['file_id']}}" alt="">
        <li>
            <h3>
                {{$r['name']}}
            </h3>
            <p>
                {{$r['price']}}
            </p>
            <a class="btn btn-danger" href="/addProduct/remove/{{$r['id']}}">Remove</a>
            <hr>
        </li>

    @endforeach
    </ul>


        <a id="downloadlink" href="/success">Download All</a>


    <style>
        #downloadlink{
            padding: 10px 30px 10px 30px;
            background-color: green;
            color: gray; border-radius: 100px;
            margin-left: 50px;
        }
    </style>


@endsection