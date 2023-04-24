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
        <x-header/>

    <div class="center">
        <h1>Luxury Motors</h1>
        <h3>Explore the +20 luxury vehicles of that we have globally</h3>

    <form action="" class="form1">
        <h2>Search 8 cars</h2>
        <select class="sel">
            <option value="value1" selected>Any Make</option>
            <option value="value2">Any Make 2</option>
            <option value="value3">Any Make 3</option>
          </select>
          <select class="sel">
            <option value="value1" selected >Any Model</option>
            <option value="value2">Any Make 2</option>
            <option value="value3">Any Make 3</option>
          </select>
          <select class="sel">
            <option value="value1" selected>Max Price</option>
            <option value="value2">Max Price 2</option>
            <option value="value3">Max Price 3</option>
          </select>
          <input type="Submit" value="Search">
    </form>
</div>
    <x-footer/>
  </body>
</html>
