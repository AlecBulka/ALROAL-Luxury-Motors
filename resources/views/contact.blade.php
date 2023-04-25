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
    <link rel="stylesheet" href={{ asset('style/contact/style.css') }}>
</head>
<body>
    <x-header/>
    <div class="con">
        <form method="POST" id="form" action="{{ route('register') }}">
        <h2>Contact Us</h2>
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" /> <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-text-input id="message" class="block mt-1 w-full" placeholder="Message" type="message" name="message" :value="old('message')" required />
        <label for=""><input type="submit" value="Send"><label>
    </form>
</div>
    <x-footer/>
</body>
</html>
