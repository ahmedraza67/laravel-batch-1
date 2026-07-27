<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="/form/submit" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="Name" id="" />

        <label for="">gmail</label>
        <input type="email" name="Email" id="" />

        <label for="">Password</label>
        <input type="password" name="Password" id="" />

        <button type="submit">Submit</button>
    </form>
</body>

</html>