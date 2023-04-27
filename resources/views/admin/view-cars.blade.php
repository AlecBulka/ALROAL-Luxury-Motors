<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Luxury Motors</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/admin/view-cars.css') }}>
</head>

<body>
    <x-header />
    <div class="menu">
        <div class="dashboard">
            <a href="#">Dashboard</a>
        </div>
        <div class="view-cars">
            <a href="#">View Cars</a>
        </div>
        <div class="view-users">
            <a href="#">View Users</a>
        </div>
        <div class="add-car">
            <a href="#">Add Car</a>
        </div>
        <div class="add-user">
            <a href="#">Add User</a>
        </div>
        <div class="buy-cars">
            <a href="#">Buy Cars</a>
        </div>
    </div>

    <div class="container">
        <h1 class="title">Users List</h1>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col" class="th">
                        NAME
                    </th>
                    <th scope="col" class="th">
                        YEAR
                    </th>
                    <th scope="col" class="th">
                        KILOMETERS
                    </th>
                    <th scope="col" class="th">
                        PRICE
                    </th>
                    <th scope="col" class="th"></th>
                    <th scope="col" class="th"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td">
                        Lamborghini Huracán STO
                    </td>
                    <td class="td">
                        2022
                    </td>
                    <td class="td">
                        15.000 km
                    </td>
                    <td class="td">
                        250.000,00€
                    </td>
                    <td class="td">
                        <button class="edit"><a href="#" >Edit</a></button>
                    </td>
                    <td class="td">
                        <button class="delete"><a href="#" >Delete</a></button>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                        Lamborghini Huracán STO
                    </td>
                    <td class="td">
                        2022
                    </td>
                    <td class="td">
                        15.000 km
                    </td>
                    <td class="td">
                        250.000,00€
                    </td>
                    <td class="td">
                        <button class="edit"><a href="#" >Edit</a></button>
                    </td>
                    <td class="td">
                        <button class="delete"><a href="#" >Delete</a></button>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                        Lamborghini Huracán STO
                    </td>
                    <td class="td">
                        2022
                    </td>
                    <td class="td">
                        15.000 km
                    </td>
                    <td class="td">
                        250.000,00€
                    </td>
                    <td class="td">
                        <button class="edit"><a href="#" >Edit</a></button>
                    </td>
                    <td class="td">
                        <button class="delete"><a href="#" >Delete</a></button>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                        Lamborghini Huracán STO
                    </td>
                    <td class="td">
                        2022
                    </td>
                    <td class="td">
                        15.000 km
                    </td>
                    <td class="td">
                        250.000,00€
                    </td>
                    <td class="td">
                        <button class="edit"><a href="#" >Edit</a></button>
                    </td>
                    <td class="td">
                        <button class="delete"><a href="#" >Delete</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer />
</body>

</html>
