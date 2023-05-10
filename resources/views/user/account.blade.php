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
    <x-header />
    <x-header-user/>
    <h1>Account Settings</h1>
    <div class="account-settings">
        <form action="{{ route('user-update-personal-details') }}" method="post" id="personal-details"
            name="personal-details">
            @csrf
            @method('put')
            <h3>Personal Details</h3>
            <label for="">Name:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" aria-label="Insert name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <label for="">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" aria-label="Insert email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <label for="">Phone Number:</label>
            <input type="tel" name="phoneNumber" id="phone" value="{{ $user->phoneNumber }}"
                aria-label="Insert phone number">
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
        <form method="post" action="{{ route('user-update-billing-details') }}" id="biling-details"
            name="biling-details">
            @csrf
            @method('put')
            <h3>Billing Details</h3>
            <label for="">Address:</label>
            <input type="text" name="address" id="address" value="{{ $user->billing->address }}"
                aria-label="Insert address">
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            <label for="">City:</label>
            <input type="text" name="city" id="city" value="{{ $user->billing->city }}"
                aria-label="Insert city">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            <label for="">Province:</label>
            <input type="text" name="province" id="province" value="{{ $user->billing->province }}"
                aria-label="Insert province"><br><br>
                <x-input-error :messages="$errors->get('province')" class="mt-2" />
            <label for="">Postal Code:</label>
            <input type="text" name="postalCode" id="code" value="{{ $user->billing->postalCode }}"
                aria-label="Insert postal code">
                <x-input-error :messages="$errors->get('postalCode')" class="mt-2" />
            <label for="">Country:</label>
            <input type="text" name="country" id="country" value="{{ $user->billing->country }}"
                aria-label="Insert country">
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
        <form method="post" action="{{ route('user-update-password') }}" id="update-password" name="update-password">
            @csrf
            @method('put')
            <h3>Update Password</h3>
            <label for="">Current Password:</label>
            <input type="password" name="current_password" id="current-passwd" aria-label="Insert current password">
            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
            <label for="">New Password:</label>
            <input type="password" name="password" id="new-passwd" aria-label="Insert new password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <label for="">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="confirm-passwd"
                aria-label="Insert new password confirmed"><br><br>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <div class="btnSave">
                <button type="submit" id="save" aria-label="Save changes">Save Changes</button>
            </div>
        </form>
    </div>
    <div class="delete-account">
        <h3>Delete Account</h3>
        <div class="btnDelete">
            <form action="{{ route('user-delete', $user) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete" aria-label="Delete account">Delete Account</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
