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
    <div class="links"><a href="#" id="fin">Finance</a><a href="#" id="cas">Cash</a></div>


</div>
    <div class="pri">
        <h1>250,000.00€</h1>
        <h3>Pricing Breakdown</h3>
        <hr>
        <h4>Vehicle Price</h4>
        <div class="pri1"><p class="p13">Vehicle Price</p><p class="p14">250.000,00€</p></div>
        <hr>
        <div class="pri1"><p class="p15">Sub Total</p><p class="p16">250.000,00€</p></div>
        <div class="pri1"><p class="p17">Fees</p><p class="p18">5.000,00€</p></div>

        <div class="pri1"><p class="p19">Deposit Paid</p><p class="p20">50.000,00€</p></div>
        <hr>
        <div class="pri1"><p class="p21">Total Purchase Price</p><p class="p22">255.000,00€</p></div>
        <div class="buy"><a href="#">Buy</a></div>
    </div>
    </div>
    <x-footer />
</body>

</html>
