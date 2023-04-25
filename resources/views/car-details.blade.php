<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/car-details/style.css') }}>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="hero">
            <h1>Lamborghini STO</h1>
            <img class="car" src="/img/main-img1.jpg" alt="">
        </div>
        <div class="buy">
            <div class="price">
                <h3>250,000.00€</h3>
            </div>
            <div class="btnBuy">
                <button type="submit" id="buyCar">BUY</button>
            </div>
        </div>
    </div>
    <div class="car-info">
        <h2>Technical specifications</h2>
        <div class="list">
            <ul id="list-one">
                <li>ENGINE: V10</li>
                <li>MAX HORSEPOWER: 640 HP</li>
                <li>MAX TORQUE: 565 NM</li>
                <li>CONSUMPTION:13.9/100KM</li>
                <li>TOP SPEED: 310KM/H</li>
                <li>ACCELERATION 0-100KM/H: 3.0SEC</li>
                <li>WHEELS: 245/30 R20</li>
                <li>TIRES: 8.5J X 20</li>
            </ul>
            <ul id="list-two">
                <li>DRIVETRAIN: RWD</li>
                <li>GEARBOX: 7-SPEED DUAL-CLUCH</li>
                <li>EXTERIOR: RED</li>
                <li>INTERIOR: BLACK</li>
                <li>BRAND: LAMBORGHINI</li>
                <li>MODEL: STO</li>
                <li>ODOMETER: 2.500KM</li>
                <li>YEAR: 2022</li>
            </ul>
        </div>
    </div>
    <x-footer />
</body>

</html>
