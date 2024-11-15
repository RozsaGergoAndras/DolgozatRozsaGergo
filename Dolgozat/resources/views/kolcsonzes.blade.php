<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        @foreach ($filmek as $film)
            @if ()
            
            @endif
        @endforeach
        


        <select name="" id="">
            @foreach ($mufajok as $mufaj)
                <option value= "{{$mufaj->id}}">{{$mufaj->mufaj}}</option>
            @endforeach
        </select>
        <select name="" id="">
            @foreach ($filmek as $film)
                <option value= "{{$film->id}}">{{$film->cim}}</option>
            @endforeach
        </select>
    </body>
</html>