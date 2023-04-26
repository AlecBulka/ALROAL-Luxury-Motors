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
            <div class="colum-one">
                <label for="">Name:</label>
                <input type="text" name="name" id="name">
                <label for="">Email:</label>
                <input type="email" name="email" id="email">
                <label for="">Postal Code:</label>
                <input type="text" name="code" id="code">
                <label for="">Address:</label>
                <input type="text" name="address" id="address">
                <label for="">City:</label>
                <input type="text" name="city" id="city">
            </div>
            <div class="colum-two">
                <label for="">Last Name:</label>
                <input type="text" name="lastname" id="lastname">
                <label for="">Phone Number:</label>
                <input type="tel" name="number" id="number">
                <label for="">Role:</label>
                <select name="role" id="role">
                    <option value="default">Select Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                </select>
                <label for="">Country:</label>
                <input type="text" name="country" id="country">
                <label for="">Province:</label>
                <input type="text" name="province" id="province">
            </div>
            <div class="btnAdd">
                <button type="submit" id="addUser" >AddUser</button>
            </div>
        </form>
    </div>
<x-footer></x-footer>
  </body>
</html>
