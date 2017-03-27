@extends('layouts.master')



@section('content')

    @foreach($result as $r)

        <a class="img" href="/succes/finalPage/{{$r['result']}}">{{$r['name']}}</a>

    @endforeach

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection



























<style>
    .container{
            text-align: center;
        }

    .img{
        text-decoration: none;
        margin-top: 5em;
        font-size: 3em;
        padding: 1em;
        color: darkorange;
        box-shadow: .3em .3em orangered, 1em 1em 0.2em lightsalmon;
        border:1px solid orange;
        font-weight: bold;
        border-radius: 10em;
    }
</style>



</body>
</html>