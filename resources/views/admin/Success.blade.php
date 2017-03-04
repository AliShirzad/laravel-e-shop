<html>
<head>
    <title>Success</title>
</head>
<body>

@foreach($result as $r)
    {{ print($r) }}
@endforeach

@foreach($path as $p)
    {{ print($p) }}
@endforeach
</body>
</html>