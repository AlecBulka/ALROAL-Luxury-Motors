<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/user/orders.css') }}>
</head>

<body>
    <x-header />
    <x-header-user />
    @foreach ($orders as $order)
        <div class="container">
            <img class="car" src="{{ asset('img/cars/' . $order->car->image) }}" alt=""
                aria-label="Car image">
            <div class="text">
                <div class="top">
                    <div>
                        <h3 aria-label="Car year {{ $order->car->year }}">{{ $order->car->year }}</h3>
                        <h2 aria-label="Car name {{ $order->car->name }}">{{ $order->car->name }}</h2>
                    </div>
                </div>
                <hr>
                <div class="seccion">
                    @if ($order->finance == true)
                        @if ($order->status == 'paymentPending')
                            <div class="left-seccion">
                                <p>Order Number: {{ $order->orderNumber }}</p>
                                <p>Financed: True</p>
                                <p>Order Date: {{ $order->updated_at->format('d-m-Y') }}</p>
                                <p>Months Financed: {{ $order->monthsFinanced }}</p>
                                <a class="pay" href="{{ route('car-payment', $order) }}">Pay</a>
                            </div>
                            <div class="right-seccion">
                                <p>Status: Payment Pending</p>
                                <p>Total Cost: {{ number_format($order->totalCost, 2) }} €</p>
                                <p>Down Payment: {{ number_format($order->downPayment, 2) }} €</p>
                                <p>Monthly Cost: {{ number_format($order->monthlyCost, 2) }} €</p>
                                <form action="{{ route('user-delete-orders', $order) }}" method="post">
                                    @csrf
                                    <button class="delete" aria-label="Delete Order">Delete Order</button>
                                </form>
                            </div>
                        @else
                            <div class="left-seccion">
                                <p>Order Number: {{ $order->orderNumber }}</p>
                                <p>Financed: True</p>
                                <p>Order Date: {{ $order->updated_at->format('d-m-Y') }}</p>
                                <p>Months Financed: {{ $order->monthsFinanced }}</p>
                            </div>
                            <div class="right-seccion">
                                <p>Status: {{ $order->status }}</p>
                                <p>Total Cost: {{ number_format($order->totalCost, 2) }} €</p>
                                <p>Down Payment: {{ number_format($order->downPayment, 2) }} €</p>
                                <p>Monthly Cost: {{ number_format($order->monthlyCost, 2) }} €</p>
                            </div>
                        @endif
                    @else
                        @if ($order->status == 'paymentPending')
                            <div class="left-seccion">
                                <p>Order Number: {{ $order->orderNumber }}</p>
                                <p>Financed: False</p>
                                <p>Order Date: {{ $order->updated_at->format('d-m-Y') }}</p>
                                <a class="pay" href="{{ route('car-payment', $order) }}">Pay</a>
                            </div>
                            <div class="right-seccion">
                                <p>Status: Payment Pending</p>
                                <p>Total Cost: {{ number_format($order->totalCost, 2) }} €</p>
                                <p><br></p>
                                <form action="{{ route('user-delete-orders', $order) }}" method="post">
                                    @csrf
                                    <button class="delete" aria-label="Delete Order">Delete Order</button>
                                </form>
                            </div>
                        @else
                            <div class="left-seccion">
                                <p>Order Number: {{ $order->orderNumber }}</p>
                                <p>Financed: False</p>
                                <p>Order Date: {{ $order->updated_at->format('d-m-Y') }}</p>
                            </div>
                            <div class="right-seccion">
                                <p>Status: {{ $order->status }}</p>
                                <p>Total Cost: {{ number_format($order->totalCost, 2) }} €</p>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    <x-footer />
</body>

</html>
