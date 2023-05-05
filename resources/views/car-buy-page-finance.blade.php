<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/car-buy-page-finance/style.css') }}>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="box1">
        <h3>2022 Lamborghini STO</h3>
        <div class="imagen"><img src="/img/main-img1.jpg" alt=""></div>
        <h4>Overview</h4>
        <div class="col1">
            <div class="p1">Transmission</div>
            <div class="p2">7-Speed</div>
            <div class="p3">Exterior Color</div>
            <div class="p4">Red</div>
            <div class="p5">Drivetrain</div>
            <div class="p6">AWD</div>
        </div>
      </div>
    </div>
    <x-footer />
</body>

</html>
