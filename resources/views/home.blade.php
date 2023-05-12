<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/home/style.css') }}>
</head>

<body>
    <x-header />

    <div class="center">
        <h1>ALROAL Luxury Motors</h1>
        <h3>Explore the +20 luxury vehicles of that we have globally</h3>

        <form action="#" class="form1">
            <h2>Search for cars by Make, Model or Price</h2>
            <select class="sel" aria-label="Select make">
                <option aria-label="">Any Make</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" aria-label="">{{ $brand->name }}</option>
                @endforeach
            </select>
            <select class="sel" aria-label="Select model">
                <option aria-label="">Any Model</option>
                @foreach ($models as $model)
                    <option value="{{ $model->id }}" aria-label="">{{ $model->name }}</option>
                @endforeach
            </select>
            <select class="sel" aria-label="Select price">
                <option>Max Price</option>
                <option value="250000.00">250,000.00 €</option>
                <option value="500000.00">500,000.00 €</option>
                <option value="750000.00">750,000.00 €</option>
                <option value="1000000.00">1,000,000.00 €</option>
                <option value="1250000.00">1,250,000.00 €</option>
                <option value="1500000.00">1,500,000.00 €</option>
                <option value="1750000.00">1,750,000.00 €</option>
                <option value="2000000.00">2,000,000.00 €</option>
                <option value="2250000.00">2,250,000.00 €</option>
                <option value="2500000.00">2,500,000.00 €</option>
                <option value="2750000.00">2,750,000.00 €</option>
                <option value="3000000.00">3,000,000.00 €</option>
            </select>
            <input type="Submit" value="Search" aria-label="Select">
        </form>
    </div>
    <x-footer />
</body>

</html>
