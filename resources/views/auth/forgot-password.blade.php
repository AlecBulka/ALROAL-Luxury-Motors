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
    <link rel="stylesheet" href={{ asset('style/forgot/style.css') }}>
</head>
<body>
    <x-header/>
    <div class="forg">
        <form method="POST" id="form" action="{{ route('password.email') }}">
            <h2>Forgot your password?</h2>
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Enter your email to recover the password" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input type="submit" value="Recover"  {{ __('Email Password Reset Link') }}></label>


        </form>
    </div>
 <x-footer/>
</body>
</html>
