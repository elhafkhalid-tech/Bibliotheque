<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Livres</h1>
    <ul>
        @foreach($livres as $livre)
        <li>
             {{$livre->titre}}
        </li>
        @endforeach
    </ul>
</body>
</html>