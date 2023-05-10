<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luxury Motors</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('style/user/dashboard.css') }}>
    </head>
    <body>
        <x-header/>
        <x-header-user/>
    <div class="personal-details">
        <form>
            <label for="">Name:</label>
            <input type="text" name="name" id="name" readonly value="{{$user->name}}" aria-label="Name {{$user->name}}">
            <label for="">Email:</label>
            <input type="email" name="email" id="email" readonly value="{{$user->email}}" aria-label="Email {{$user->email}}">
            <label for="">Phone Number:</label>
            <input type="tel" name="phoneNumber" id="phone" readonly value="{{$user->phoneNumber}}" aria-label="Phone number {{$user->phoneNumber}}"><br><br>
            <div class="btnEdit">
                <a id="edit" href="{{route('user-account')}}" aria-label="Edit">Edit</a>
            </div>
        </form>
    </div>
<x-footer></x-footer>
  </body>
</html>
