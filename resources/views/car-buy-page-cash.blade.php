<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/car-buy-page-cash/style.css') }}>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="box1">
            <h3>{{$car->name}}</h3>
            <div class="imagen"><img src="{{asset('img/cars/' . $car->image)}}" alt=""></div>

            <h4>Overview</h4>
            <div class="over">
                <div class="col1">
                    <div class="p1">Transmission</div>
                    <div class="p2">{{$car->gearbox}}</div>
                    <div class="p3">Exterior Color</div>
                    <div class="p4">{{$car->exterior}}</div>
                    <div class="p5">Drivetrain</div>
                    <div class="p6">{{$car->driveTrain}}</div>
                </div>
                <div class="col2">
                    <div class="p7">Engine</div>
                    <div class="p8">{{$car->engine}}</div>
                    <div class="p9">Interior Color</div>
                    <div class="p10">{{$car->interior}}</div>
                    <div class="p11">Odometer</div>
                    <div class="p12">{{$car->kilometers}} KM</div>
                </div>
            </div>
        </div>
        <div class="config">
            <h3>Payment Configurator</h3>
            <div class="links"><a href="{{route('car-finance-page', $car)}}" id="fin">Finance</a><a href="#" id="cas">Cash</a>
            </div>


        </div>
        <div class="pri">
            <h1>{{number_format($car->price * 1.10, 2)}} €</h1>
            <h3>Pricing Breakdown</h3>
            <hr>
            <h4>Vehicle Price</h4>
            <div class="pri1">
                <p class="p13">Vehicle Price</p>
                <p class="p14">{{number_format($car->price, 2)}} €</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p15">Sub Total</p>
                <p class="p16">{{number_format($car->price, 2)}} €</p>
            </div>
            <div class="pri1">
                <p class="p17">Fees</p>
                <p class="p18">{{number_format(($car->price * 1.10) - $car->price, 2)}} €</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p21">Total Purchase Price</p>
                <p class="p22">{{number_format($car->price * 1.10, 2)}} €</p>
            </div>
            <div class="buy">
                <form action="{{route('car-cash-post', $car)}}" method="post">
                    @csrf
                    <input type="text" name="status" value="paymentPending" hidden>
                    <input type="number" name="totalCost" value="{{$car->price * 1.10, 2}}" hidden>
                    <button>Buy</button>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
