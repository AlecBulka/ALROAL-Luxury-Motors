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
            <div class="top">
                <div>
                    <h3>2022</h3>
                    <h2>Lamborghini STO</h2>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="none" class="bookmark">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
            </div>
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
                    <button class="viewCar"><a href="#">View Car</a></button>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
