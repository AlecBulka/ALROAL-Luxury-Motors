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
    <div class="menu">
        <div class="dashboard">
            <a href="#">Dashboard</a>
        </div>
        <div class="view-cars">
            <a href="#">View Cars</a>
        </div>
        <div class="view-users">
            <a href="#">View Users</a>
        </div>
        <div class="add-car">
            <a href="#">Add Car</a>
        </div>
        <div class="add-user">
            <a href="#">Add User</a>
        </div>
        <div class="buy-cars">
            <a href="#">Buy Cars</a>
        </div>
    </div>
    <div class="user-details">
        <form>
            <label for="">Name:</label>
            <input type="text" name="name" id="name">
            <label for="">Email:</label>
            <input type="email" name="email" id="email">
            <label for="">Postal Code:</label>
            <input type="text" name="code" id="code">
            <div class="btnEdit">
                <button type="submit" id="edit" >Edit</button>
            </div>
        </form>
    </div>
<x-footer></x-footer>
  </body>
</html>
