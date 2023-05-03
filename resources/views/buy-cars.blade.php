<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/buy/style.css') }}>
</head>

<body>
    <x-header />
    @foreach ($cars as $car)
        <div class="container">
            <img class="car" src="/img/main-img1.jpg" alt="" aria-label="Car image">
            <div class="text">
                <div class="top">
                    <div>
                        <h3 aria-label="Car year {{$car->year}}">{{$car->year}}</h3>
                        <h2 aria-label="Car name {{$car->name}}">{{$car->name}}</h2>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="none" class="bookmark" aria-label="Save Card">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                </div>
                <hr>
                <div class="seccion">
                    <div class="left-seccion">
                        <p aria-label="Odometer {{$car->kilometers}} KM">Odometer: {{$car->kilometers}} KM</p>
                        <p aria-label="Exteriror {{$car->exterior}}">Exterior: {{$car->exterior}}</p>
                        <p aria-label="Interior {{$car->interior}}">Interior: {{$car->interior}}</p>
                        <h3 aria-label="Price (EUR)">Price (EUR)</h3>
                    </div>
                    <div class="right-seccion">
                        <p aria-label="Drivetrain {{$car->driveTrain}}">Drivetrain: {{$car->driveTrain}}</p>
                        <p aria-label="Transmission {{$car->gearbox}}">Transmission: {{$car->gearbox}}</p>
                        <p aria-label="Engine {{$car->horsepower}} HP">Engine: {{$car->horsepower}} HP</p>
                        <h3 aria-label="{{$car->price}}€">{{$car->price}}€</h3>
                        <button class="viewCar"><a href="{{route('car-details', $car)}}" aria-label="View Car">View Car</a></button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <x-footer />
</body>

</html>
