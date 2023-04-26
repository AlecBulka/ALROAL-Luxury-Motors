<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/user/saved.css') }}>
</head>

<body>
    <x-header />
    <div class="container">
        <img class="car" src="/img/main-img1.jpg" alt="">
        <div class="text">
            <h3>Pre-Owned 2022</h3>
            <h2>Lamborghini STO</h2>
            <hr>
            <div class="seccion">
                <div class="left-seccion">
                    <p>Odometer: 2,500 KM</p>
                    <p>Exterior: Red</p>
                    <p>Interior: Black</p>
                    <h3>Price (EUR)</h3>
                </div>
                <div class="right-seccion">
                    <p>Drivetrain: AWD</p>
                    <p>Transmission: 7-Speed</p>
                    <p>Engine: 640HP</p>
                    <h3>€250,000.00</h3>
                    <a class="viewCar" href="#">View Car</a>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
