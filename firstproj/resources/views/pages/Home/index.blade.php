<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home here</h1>
    @foreach ($data as $d)
    <div>{{$d}}</div>
    @endforeach
</body>

</html>