<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/admin/dashboard.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin/>

    <div class="info">
        <div class="totalUsers">
            <h3>Total Users</h3>
            <p>8</p>
        </div>
        <div class="totalCars">
            <h3>Total Cars</h3>
            <p>40</p>
        </div>
        <div class="carsSolid">
            <h3>Cars Solid</h3>
            <p>25</p>
        </div>
    </div>

  <x-footer />
</body>
</html>
