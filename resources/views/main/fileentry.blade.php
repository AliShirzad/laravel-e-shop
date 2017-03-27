@extends('layouts.master')
@section('content')

    @if(isset($data))
        {{print_r($data)}}
    @endif

@endsection