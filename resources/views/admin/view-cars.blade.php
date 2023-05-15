<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/admin/view-cars.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin/>

    <div class="container">
        <h1 class="title">Cars List</h1>
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
                @foreach ($cars as $car)
                    <tr>
                        <td class="td">
                            {{ $car->name }}
                        </td>
                        <td class="td">
                            {{ $car->year }}
                        </td>
                        <td class="td">
                            {{ $car->kilometers }} KM
                        </td>
                        <td class="td">
                            {{ number_format($car->price, 2) }} €
                        </td>
                        <td class="td">
                            <button class="edit"><a href="{{ route('admin-edit-cars', $car) }}">Edit</a></button>
                        </td>
                        <td class="td">
                            <form action="{{ route('admin-delete-cars', $car) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  <x-footer />
</body>
</html>
