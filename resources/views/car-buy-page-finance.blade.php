<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/car-buy-page-finance/style.css') }}>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="box1">
            <h3>{{$car->name}}</h3>
            <div class="imagen"><img src="{{ asset('img/cars/' . $car->image) }}" alt=""></div>

            <h4>Overview</h4>
            <div class="over">
                <div class="col1">
                    <div class="p1">Transmission</div>
                    <div class="p2">{{ $car->gearbox }}</div>
                    <div class="p3">Exterior Color</div>
                    <div class="p4">{{ $car->exterior }}</div>
                    <div class="p5">Drivetrain</div>
                    <div class="p6">{{ $car->driveTrain }}</div>
                </div>
                <div class="col2">
                    <div class="p7">Engine</div>
                    <div class="p8">{{ $car->engine }}</div>
                    <div class="p9">Interior Color</div>
                    <div class="p10">{{ $car->interior }}</div>
                    <div class="p11">Odometer</div>
                    <div class="p12">{{ $car->kilometers }} KM</div>
                </div>
            </div>
        </div>
        <div class="config">
            <h3>Payment Configurator</h3>
            <div class="links"><a href="#" id="fin">Finance</a><a
                    href="{{ route('car-cash-page', $car) }}" id="cas">Cash</a>
            </div>
            <div class="sel">
                <h4>Frequency</h4>
                <input value="Monthly" readonly>
            </div>
            <div class="sel">
                <h4>Finance Term</h4>
                <select id="term" name="select">
                    <option value="12">12 Months</option>
                    <option value="24">24 Months</option>
                    <option value="36">36 Months</option>
                    <option value="48">48 Months</option>
                    <option value="60">60 Months</option>
                </select>
            </div>
            <div class="sel">
                <h4>Down Payment</h4>
                <input id="downPayment" type="number" min="0" max="{{ $car->price }}">
            </div>
        </div>
        <div class="pri">
            <h1 id="monthlyCost"></h1>
            <h3>Pricing Breakdown</h3>
            <hr>
            <h4>Vehicle Price</h4>
            <div class="pri1">
                <p class="p13">Vehicle Price</p>
                <p class="p14" id="vehiclePrice">{{ number_format($car->price, 2) }} €</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p15">Sub Total(if Financing)</p>
                <p class="p16" id="subTotal">{{ number_format($car->price * 1.1, 2) }} €</p>
            </div>
            <div class="pri1">
                <p class="p17">Fees</p>
                <p class="p18">{{ number_format($car->price * 1.1 - $car->price, 2) }} €</p>
            </div>
            <div class="pri1">
                <p class="p19">Deposit Paid</p>
                <p class="p20" id="deposit">{{ number_format(0, 2) }} €</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p21">Total Amount Financed</p>
                <p class="p22" id="totalFinanced"></p>
            </div>
            <hr>
            <h3>Finance Payment</h3>
            <div class="pri1">
                <p class="p23">Interest Rate</p>
                <p class="p24">5.99 %</p>
            </div>
            <div class="pri1">
                <p class="p25">Finance Term</p>
                <p class="p26" id="financeTerm">12 Months</p>
            </div>
            <div class="pri1">
                <p class="p27">Total Cost With Interest</p>
                <p class="p28" id="TCWI"></p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p27">Finance Payment</p>
                <p class="p28" id="financePayment"></p>
            </div>
            <div class="buy">
                <form action="{{route('car-finance-post', $car)}}" method="post">
                    @csrf
                    <input type="text" name="status" value="paymentPending" hidden>
                    <input type="text" id="inputTC" name="totalCost" hidden>
                    <input type="number" name="finance" value="1" hidden>
                    <input type="text" id="inputMF" name="monthsFinanced" hidden>
                    <input type="text" id="inputDP" name="downPayment" hidden>
                    <input type="text" id="inputMC" name="monthlyCost" hidden>
                    <button>Buy</button>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
    <script src="{{ asset('js/finance.js') }}"></script>
</body>

</html>
