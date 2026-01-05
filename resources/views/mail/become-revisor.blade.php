<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CashFromClutter</title>
</head>
<body>
    <div>
        <h1>A user requested to work with us</h1>
        <h2>Here are his details;</h2>
        <p>Name: {{$user->name}}</p>
        <p>Emal address: {{$user->email}}</p>
        <p>If you with to accept the request, click here:</p>
        <a href="{{route('make.revisor', compact('user'))}}">Make revisor</a>
    </div>
</body>
</html>