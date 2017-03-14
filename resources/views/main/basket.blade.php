@extends('layouts.master')

@section('content')


    <ul>
    @foreach($result as $res => $r)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" >
                    <img src="{{$r['file_id']}}" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>{{$r['name']}}</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                    <label>{{$r['price']}}</label></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11"></div>

                            <div class="col-md-1">
                                <a href="/addProduct/remove/{{$r['id']}}" class="btn btn-danger btn-product">Remove</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            @endforeach
    </ul>

@foreach($data as $dd)
    @if(is_null($dd))
        {{--{{ print($r['file_id']) }}--}}
        <h3><a href="/">سبد خرید خالی است</a></h3>
    @endif
@endforeach
    <br/>
    <div class="col-sm-12 col-md-12" style="margin-top: 10%;">
        <div class="row">

            @if(!is_null($dd))
                <a id="downloadlink" href="/success/">Download All</a>
            @endif

        </div>

    <style>
        #downloadlink{

            padding: 20px 40px 20px 40px;
            background-color: green;
            color: white;
            font-weight: bolder;
            font-size: 1.4em;
            border-radius: 100px;
            margin-left: 50px;
        }
    </style>


@endsection