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
    <link rel="stylesheet" href={{ asset('style/register/style.css') }}>
</head>
<body>
    <x-header/>
    <div class="reg">
    <form action="" id="form">
        <h2>Register</h2>
        <label for=""><input type="text" placeholder="Name"></label>
        <label for=""><input type="text" placeholder="LastName"></label>
        <label for=""><input type="text" placeholder="Email"></label>
        <label for=""><input type="text" placeholder="Password"></label>
        <label for=""><input type="text" placeholder="Repeat Password"></label>       <label for=""><input type="text" placeholder="Phone Number"></label>
        <label for=""><input type="submit" placeholder="Register" value="Register"></label>
        <p class="p0">Alredy registered?</p>
        <a href="{{ route('login') }}">Login</a>
    </form>
</div>
    <x-footer/>
</body>
</html>
