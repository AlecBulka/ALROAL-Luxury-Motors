<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/tunning/style.css') }}>
</head>
<body>
    <x-header/>
    <div class="vol">
        <div class="volante"><img src="img/tunning/volante.png" id="volante"></div>
        <p id="p1">The Luxury Tunning customization program, available for any luxury vehicle,
            allows each client to create their own custom vehicle,
            evaluating and shaping each desire. The combinations are endless,  from the colors to the materials: from the logo on the seat, sewn by hand instead of fire-engraved.</p>
    </div>

    <div class="for">
        <p id="p2">Or the possibility of choosing between several types of materials,
from the exclusive semi-aniline leather,  enriched with other effects and
developed by the best Italian craftsmen, to Forged Composite, an innovative carbon fiber material.</p>
            <div class="ford"><img src="img/tunning/ford.png" id="ford"></div>
    </div>

    <div class="asien">
        <div class="asiento"><img src="img/tunning/asiento.png" id="asiento"></div>
        <p id="p3">Customers who wish to make use of the personalization program can configure
            their car directly in the Luxury Tuning Department, the area dedicated to personalization
            to offer a unique experience has samples of leathers, colors, materials, seats and wheels,
            also offering the possibility of a digital simulation of the possible options through
            an advanced configurator for cars.</p>
    </div>

    <div class="gwa">
        <div class="gwagon"><img src="img/tunning/gwagon.png" id="gwagon"></div>
        <p id="p4">With the help of our team of experts, it is possible to follow
            the development of the supercar itself in each of the phases
            of definition of colours, equipment and materials.
            Customer
            advice is preceded by the experience  inside the factory,
             a guided tour inside the establishment to immediately see some
            examples of the possible configurations of their models.</p>
    </div>
    <x-footer/>
</body>
</html>
