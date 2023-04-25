<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luxury Motors</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('style/user/view.css') }}>
    </head>
    <body>
        <x-header/>
    <h1>Account Settings</h1>
    <div class="account-settings">
        <form id="personal-details" name="personal-details">
            <h3>Personal Details</h3>
            <label for="">Name:</label>
            <input type="text" name="name" id="name">
            <label for="">Email:</label>
            <input type="email" name="email" id="email">
            <label for="">Phone Number:</label>
            <input type="tel" name="phone" id="phone">
            <div class="btnSave">
                <button type="submit" id="save">Save Changes</button>
            </div>
        </form>
        <form id="biling-details" name="biling-details">
            <h3>Biling Details</h3>
            <label for="">Address:</label>
            <input type="text" name="address" id="address">
            <label for="">City:</label>
            <input type="text" name="city" id="city">
            <label for="">Province:</label>
            <input type="text" name="province" id="province"><br><br>
            <label for="">Postal Code:</label>
            <input type="text" name="code" id="code">
            <label for="">Country:</label>
            <input type="text" name="country" id="country">
            <div class="btnSave">
                <button type="submit" id="save">Save Changes</button>
            </div>
        </form>
        <form id="update-password" name="update-password">
            <h3>Update Password</h3>
            <label for="">Current Password:</label>
            <input type="password" name="current-passwd" id="current-passwd">
            <label for="">New Password:</label>
            <input type="password" name="new-passwd" id="new-passwd">
            <label for="">Confirm Password:</label>
            <input type="password" name="confirm-passwd" id="confirm-passwd"><br><br>
            <div class="btnSave">
                <button type="submit" id="save">Save Changes</button>
            </div>
        </form>
    </div>
    <div class="delete-account">
        <h3>Delete Account</h3>
        <div class="btnDelete">
            <button type="submit" id="delete">Delete Account</button>
        </div>
    </div>
    <x-footer></x-footer>
  </body>
</html>
