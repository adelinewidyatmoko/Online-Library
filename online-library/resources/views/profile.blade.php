<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Ths is my profile (route through Controller )</h1>
    <h2>{{$user['name']}}</h2> <!--how to call from an array -->
    <h2>{{$user['email']}}</h2>
    <img src="{{$user['gambar']}}" alt="">
</body>
</html>