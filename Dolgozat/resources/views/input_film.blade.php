<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="{{route('film.storeketto')}}" method="post">
            @csrf
            <input type="text" id="cim" name="cim">
            <input type="text" id="rendezo" name="rendezo">
            <input type="date" id="megjelenes" name="megjelenes">
            <select name="mufaj_id" id="mufaj_id">
                @foreach ($mufajok as $mufaj)
                    <option value= "{{$mufaj->id}}">{{$mufaj->mufaj}}</option>
                @endforeach
            </select>
            <input type="submit">
        </form>
    </body>
</html>