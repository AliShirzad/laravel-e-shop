<html>
<head>
    <title>Success</title>
</head>
<body>

@foreach($result as $item)
    <a href="../{{$item['file_id']}}">Download {{ $item['name'] }}</a>
    <br>


@endforeach
{{--<h1>--}}
    {{--{{print($id)}}--}}
{{--</h1>--}}
{{--<br>--}}
{{--@foreach($data as $dd)--}}
{{--<h1>Data is: {{ print_r($dd) }}</h1>--}}
{{--@endforeach--}}

{{--@foreach($product as $pp)--}}
    {{--<h1>Product is: {{ print_r($pp->id) }}</h1>--}}
{{--@endforeach--}}





<style>
    *{
        text-align: center;
        margin-top: 10vh;
    }

    a{
        font-size: 4em;
        color: gray;
        font-weight: bold;
    }
</style>


<script>
    var a1 = document.querySelector('a');
    console.log(a1);

</script>
</body>
</html>