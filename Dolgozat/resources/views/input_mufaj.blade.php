<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('mufaj.store')}}" method="post">
            @csrf
            <input type="text" id="mufaj" name="mufaj">
            <input type="submit">
        </form>
</body>
</html>