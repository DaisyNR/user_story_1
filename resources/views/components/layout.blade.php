<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Story 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Bungee+Shade&family=Contrail+One&family=Lexend:wght@100..900&family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Bungee+Shade&family=Lexend:wght@100..900&family=Titan+One&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    
</head>
<body>
    
    <x-navbar/>
    
    <div class="min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer/>
    
</body>
</html>