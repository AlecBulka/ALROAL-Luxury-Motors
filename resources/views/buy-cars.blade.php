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
    <div class="container">
        <img src="/img/main-img1.jpg" alt="">
        <div class="text">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>
    <x-footer />
</body>

</html>
