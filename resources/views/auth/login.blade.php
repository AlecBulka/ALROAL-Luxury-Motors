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
        <link rel="stylesheet" href={{ asset('style/login/style.css') }}>
    </head>
    <body>
        <x-header/>
        <div class="log">
        <form method="POST" id="form" action="{{ route('login') }}">
            <h2>Welcome</h2>
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <x-text-input id="password" placeholder="Password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />
<x-input-error :messages="$errors->get('password')" class="mt-2" />
            <label for="">
            <a class="a4" href="{{ route('password.request') }}">Forgot your password?</a><br>
            <input type="submit" placeholder="Login" value="Login"></label>
            <p class="p0">Alredy logged in?</p>
            <a href="{{ route('register') }}">Register</a>
        </form>
    </div>
        <x-footer/>
    </body>
    </html>
