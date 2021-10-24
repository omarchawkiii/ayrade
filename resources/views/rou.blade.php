<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
        
        <h2>vous etes authentifier </h2>
        <h3>bonjour {{ Auth::user()->name }}</h3>
    @endauth
    <h1>rou</h1>
</body>
</html>