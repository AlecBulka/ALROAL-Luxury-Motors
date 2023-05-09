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
            <h3>2022 Lamborghini STO</h3>
            <div class="imagen"><img src="/img/main-img1.jpg" alt=""></div>

            <h4>Overview</h4>
            <div class="over">
                <div class="col1">
                    <div class="p1">Transmission</div>
                    <div class="p2">7-Speed</div>
                    <div class="p3">Exterior Color</div>
                    <div class="p4">Red</div>
                    <div class="p5">Drivetrain</div>
                    <div class="p6">AWD</div>
                </div>
                <div class="col2">
                    <div class="p7">Engine</div>
                    <div class="p8">640HP</div>
                    <div class="p9">Interior Color</div>
                    <div class="p10">Black</div>
                    <div class="p11">Odometer</div>
                    <div class="p12">2,500 KM</div>
                </div>
            </div>
        </div>
        <div class="config">
            <h3>Payment Configurator</h3>
            <div class="links"><a href="#" id="fin">Finance</a><a href="#" id="cas">Cash</a>
            </div>
            <div class="sel">
                <h4>Frequency</h4>
                <select name="select">
                    <option value="value1">Monthly </option>
                    <option value="value2" selected>Monthly</option>
                    <option value="value3">Monthly</option>
                </select>
            </div>
            <div class="sel">
                <h4>Frequency</h4>
                <select name="select">
                    <option value="value1">60 Months </option>
                    <option value="value2" selected>60 Months</option>
                    <option value="value3">60 Months</option>
                </select>
            </div>
            <div class="sel">
                <h4>Frequency</h4>
                <select name="select">
                    <option value="value1">50.000€ </option>
                    <option value="value2" selected>50.000€</option>
                    <option value="value3">50.000€</option>
                </select>
            </div>
        </div>
        <div class="pri">
            <h1>4.531,33€/monthly</h1>
            <h3>Pricing Breakdown</h3>
            <hr>
            <h4>Vehicle Price</h4>
            <div class="pri1">
                <p class="p13">Vehicle Price</p>
                <p class="p14">250.000,00€</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p15">Sub Total(if Financing)</p>
                <p class="p16">5.000,00€</p>
            </div>
            <div class="pri1">
                <p class="p17">Fees</p>
                <p class="p18">5.000,00€</p>
            </div>
            <div class="pri1">
                <p class="p19">Deposit Paid</p>
                <p class="p20">50.000,00€</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p21">Total Amount Financed</p>
                <p class="p22">205.000,00€</p>
            </div>
            <hr>
            <h3>Finance Payment</h3>
            <div class="pri1">
                <p class="p23">Interest Rate</p>
                <p class="p24">5,99%</p>
            </div>
            <div class="pri1">
                <p class="p25">Finance Term</p>
                <p class="p26">60 months</p>
            </div>
            <hr>
            <div class="pri1">
                <p class="p27">Finance Payment</p>
                <p class="p28">4.439,96€</p>
            </div>
            <div class="buy"><a href="#">Buy</a></div>
        </div>
    </div>
    <x-footer />
</body>

</html>
