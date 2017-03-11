<html>
<head>
    <title>Success</title>
</head>
<body>

@foreach($result as $item)
    {{--<a href="storage/app/{{ str_replace("/storage/", "",  "$item->file_id") }}">{{ $item->name }}</a>--}}
    {{--{{ print_r($item->file_id) }}--}}
    <a href="{{$item['file_num']}}">Download {{ $item['name'] }}</a>
    <br>
@endforeach




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