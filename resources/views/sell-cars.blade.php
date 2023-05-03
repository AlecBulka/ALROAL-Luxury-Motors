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
    <link rel="stylesheet" href={{ asset('style/sell/style.css') }}>
</head>
<body>
    <x-header/>
        <div class="sell">
            <div class="img"><p id="p1">Select image</p></div>
            <form method="POST" name="form" id="form">
                <div class="f1">
                    <div class="name">
                        <label for="name">Name</label><br>
                        <input type="text" id="name"><br>
                    </div>
                    <div class="model">
                        <label for="model">Model</label><br>
                        <input type="text" id="model"><br>
                    </div>
                    <div class="kilometer">
                        <label for="kilometers">Kilometers</label><br>
                    <input type="text" id="kilometers"><br>
                    </div>
                </div>
                <div class="f2">
                    <div class="brand">
                        <label for="brand">Brand</label><br>
                        <input type="text" id="Brand"><br>
                    </div>
                    <div class="year">
                        <label for="year">Year</label><br>
                        <input type="number" id="year"><br>
                    </div>
                </div>

            </form>
        </div>
        <div class="boton"><a href="" id="a1">Sell Car</a></div>
    <x-footer/>
</body>
</html>
