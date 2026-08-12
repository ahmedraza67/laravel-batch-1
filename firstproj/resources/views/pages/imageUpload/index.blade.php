<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Upload Image Here</h1>

    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="fileName">
        <input type="file" name="image">
        <button type="submit">Submit</button>
    </form>

</body>

</html>