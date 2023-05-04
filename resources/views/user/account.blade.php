<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luxury Motors</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('style/user/account.css') }}>
    </head>
    <body>
        <x-header/>
        <div class="menu">
            <div class="dashboard">
                <a href="{{route('user-dashboard')}}" aria-label="Dashboard">Dashboard</a>
            </div>
            <div class="saved-cars">
                <a href="{{route('user-saved-cars')}}" aria-label="Saved cars">Saved Cars</a>
            </div>
        </div>
    <h1>Account Settings</h1>
    <div class="account-settings">
        <form id="personal-details" name="personal-details">
            <h3>Personal Details</h3>
            <label for="">Name:</label>
            <input type="text" name="name" id="name" value="{{$user->name}}" aria-label="Insert name">
            <label for="">Email:</label>
            <input type="email" name="email" id="email" value="{{$user->email}}" aria-label="Insert email">
            <label for="">Phone Number:</label>
            <input type="tel" name="phoneNumber" id="phone" value="{{$user->phoneNumber}}" aria-label="Insert phone number">
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
        <form id="biling-details" name="biling-details">
            <h3>Biling Details</h3>
            <label for="">Address:</label>
            <input type="text" name="address" id="address" value="{{$user->billing->address}}" aria-label="Insert address">
            <label for="">City:</label>
            <input type="text" name="city" id="city"  value="{{$user->billing->city}}" aria-label="Insert city">
            <label for="">Province:</label>
            <input type="text" name="province" id="province"  value="{{$user->billing->province}}" aria-label="Insert province"><br><br>
            <label for="">Postal Code:</label>
            <input type="text" name="postalCode" id="code"  value="{{$user->billing->postalCode}}" aria-label="Insert postal code">
            <label for="">Country:</label>
            <input type="text" name="country" id="country"  value="{{$user->billing->country}}" aria-label="Insert country">
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
        <form id="update-password" name="update-password">
            <h3>Update Password</h3>
            <label for="">Current Password:</label>
            <input type="password" name="password" id="current-passwd" aria-label="Insert current password">
            <label for="">New Password:</label>
            <input type="password" name="newPassword" id="new-passwd" aria-label="Insert new password">
            <label for="">Confirm Password:</label>
            <input type="password" name="newPasswordConfirmed" id="confirm-passwd" aria-label="Insert new password confirmed"><br><br>
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
    </div>
    <div class="delete-account">
        <h3>Delete Account</h3>
        <div class="btnDelete">
            <button type="submit" id="delete" aria-label="Delete account">Delete Account</button>
        </div>
    </div>
    <x-footer></x-footer>
  </body>
</html>

