<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/sell/style.css') }}>
</head>

<body>
    <x-header />

    <div class="sell">
        <form method="POST" name="form">
            <div id="formulario">
                <div class="f1">
                    <div class="name">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name"><br>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="model">
                        <label for="model">Model:</label><br>
                        <input type="text" id="model" name="model"><br>
                        <x-input-error :messages="$errors->get('model')" class="mt-2" />
                    </div>
                    <div class="kilometer">
                        <label for="kilometers">Kilometers:</label><br>
                        <input type="text" id="kilometers" name="kilometers"><br>
                        <x-input-error :messages="$errors->get('kilometers')" class="mt-2" />
                    </div>
                </div>
                <div class="f2">
                    <div class="brand">
                        <label for="brand">Brand:</label><br>
                        <input type="text" id="Brand" name="brand"><br>
                        <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                    </div>
                    <div class="year">
                        <label for="year">Year:</label><br>
                        <input type="number" id="year" name="year"><br>
                        <x-input-error :messages="$errors->get('year')" class="mt-2" />
                    </div>
                    <div class="addimage">
                        <input type="file" name="image" id="image" class="image">
                        <label for="image">Upload an image</label>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="btnsell">
                <button type="submit" id="sell">Sell Car</button>
            </div>
        </form>
    </div>
    <x-footer />
</body>

</html>
