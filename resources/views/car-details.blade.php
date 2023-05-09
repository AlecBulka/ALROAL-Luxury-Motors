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
            <div class="header">
                <h1>{{ $car->name }}</h1>
                @if (Auth::user() and Auth::user()->role_id == 1)
                    @if ($saved->count() == 0)
                        <form action="{{ route('save', $car) }}" method="POST">
                            @csrf
                            <button class="save-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="none" class="save">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </button>
                        </form>
                    @else
                        <form action="{{ route('remove-save', $car) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="save-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="none" class="saved">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </button>
                        </form>
                    @endif
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="none" class="save" aria-label="Save Card">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                @endif
            </div>
            <div class="car">
                <img src="{{ asset('img/cars/' . $car->image) }}" alt="" aria-label="image car">
            </div>
        </div>
        <div class="buy">
            <div class="price">
                <h3>{{ $car->price }}€</h3>
            </div>
            <div class="btnBuy">
                <button type="submit" id="buyCar" aria-label="Buy car">Buy</button>
            </div>
        </div>
    </div>
    <div class="car-info">
        <h2>Technical specifications</h2>
        <div class="list">
            <ul id="list-one">
                <li>Engine: {{ $car->engine }}</li>
                <li>Max Horsepower: {{ $car->horsepower }} HP</li>
                <li>Max Torque: {{ $car->torque }} NM</li>
                <li>Consumption: {{ $car->consumption }}L/100KM</li>
                <li>Top Speed: {{ $car->topSpeed }}KM/H</li>
                <li>Acceleration 0-100KM/H: {{ $car->acceleration }}Sec</li>
                <li>Wheels: {{ $car->wheels }}</li>
                <li>Tires: {{ $car->tires }}</li>
            </ul>
            <ul id="list-two">
                <li>Drivetrain: {{ $car->driveTrain }}</li>
                <li>Gearbox: {{ $car->gearbox }}</li>
                <li>Exterior: {{ $car->exterior }}</li>
                <li>Interior: {{ $car->interior }}</li>
                <li>Brand: {{ $car->carbrand->name }}</li>
                <li>Model: {{ $car->carmodel->name }}</li>
                <li>Odometer: {{ $car->kilometers }}KM</li>
                <li>Year: {{ $car->year }}</li>
            </ul>
        </div>
    </div>
    <x-footer />
</body>

</html>
