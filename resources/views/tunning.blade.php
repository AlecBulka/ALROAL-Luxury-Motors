<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/tunning/style.css') }}>
</head>
<body>
    <x-header/>
    <div class="vol">
        <img src="img/tunning/component18.png">
        <p id="p1">The Luxury Tunning customization program, available for any luxury vehicle,
            allows each client to create their own custom vehicle,
            evaluating and shaping each desire. The combinations are endless,  from the colors to the materials: from the logo on the seat, sewn by hand instead of fire-engraved.</p>
    </div>


    <x-footer/>
</body>
</html>
