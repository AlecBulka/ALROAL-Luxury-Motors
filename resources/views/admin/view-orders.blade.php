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
    <link rel="stylesheet" href={{ asset('style/admin/view-orders.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin/>

    <div class="container">
        <h1 class="title">Orders List</h1>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col" class="th">
                        ORDER NUMBER
                    </th>
                    <th scope="col" class="th">
                        STATUS
                    </th>
                    <th scope="col" class="th">
                        TOTAL COST
                    </th>
                    <th scope="col" class="th">
                        FINANCED
                    </th>
                    <th scope="col" class="th">
                        MONTHS FINANCED
                    </th>
                    <th scope="col" class="th">
                        DOWN PAYMENT
                    </th>
                    <th scope="col" class="th">
                        MONTHLY COST
                    </th>
                    <th scope="col" class="th">
                        ORDER DATE
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="td">
                            {{ $order->orderNumber }}
                        </td>
                        <td class="td">
                            {{ $order->status }}
                        </td>
                        <td class="td">
                            {{ number_format($order->totalCost, 2) }} €
                        </td>
                        <td class="td">
                            {{ $order->finance }}
                        </td>
                        <td class="td">
                            {{ $order->monthsFinanced }}
                        </td>
                        <td class="td">
                            {{ number_format($order->downPayment, 2) }} €
                        </td>
                        <td class="td">
                            {{ number_format($order->monthlyCost, 2) }} €
                        </td>
                        <td class="td">
                            {{ $order->updated_at->format('d-m-Y') }}
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
  <x-footer />
</body>
</html>
