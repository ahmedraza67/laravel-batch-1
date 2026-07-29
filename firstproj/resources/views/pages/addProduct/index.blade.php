<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/addproduct" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="name">

        <label for="price">Price</label>
        <input type="text" name="price" placeholder="price">

        <label for="description">Description</label>
        <input type="text" name="description" placeholder="description">

        <button type="submit">Submit</button>

    </form>
</body>

</html>