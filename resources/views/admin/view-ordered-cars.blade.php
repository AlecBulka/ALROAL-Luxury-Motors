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
    <link rel="stylesheet" href={{ asset('style/admin/view-ordered-cars.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin/>

    <div class="container">
        <h1 class="title">Order List</h1>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col" class="th">NAME</th>
                    <th scope="col" class="th">DATE</th>
                    <th scope="col" class="th">ORDER NUMBER</th>
                    <th scope="col" class="th">PRICE</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="td">Lamborghini Huracán STO</td>
                        <td class="td">09/05/2023</td>
                        <td class="td">LS098884930 </td>
                        <td class="td"> 250.000,00€</td>
                    </tr>
                    <tr>
                        <td class="td">Lamborghini Huracán STO</td>
                        <td class="td">09/05/2023</td>
                        <td class="td">LS098884930 </td>
                        <td class="td"> 250.000,00€</td>
                    </tr>
                    <tr>
                        <td class="td">Lamborghini Huracán STO</td>
                        <td class="td">09/05/2023</td>
                        <td class="td">LS098884930 </td>
                        <td class="td"> 250.000,00€</td>
                    </tr>
                    <tr>
                        <td class="td">Lamborghini Huracán STO</td>
                        <td class="td">09/05/2023</td>
                        <td class="td">LS098884930 </td>
                        <td class="td"> 250.000,00€</td>
                    </tr>
            </tbody>
        </table>
    </div>
  <x-footer />
</body>
</html>
