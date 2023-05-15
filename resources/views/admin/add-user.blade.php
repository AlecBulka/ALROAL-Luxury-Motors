<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/admin/add-user.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin />
    <form action="{{ route('admin-store-users') }}" method="post">
        @csrf
        <div class="user-details">
            <div class="column-one">
                <label for="">Name:</label>
                <input type="text" name="name" id="name"><br>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <label for="">Email:</label>
                <input type="email" name="email" id="email"><br>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="">Postal Code:</label>
                <input type="text" name="postalCode" id="code"><br>
                <x-input-error :messages="$errors->get('postalCode')" class="mt-2" />
                <label for="">Address:</label>
                <input type="text" name="address" id="address"><br>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                <label for="">City:</label>
                <input type="text" name="city" id="city"><br>
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <div class="column-two">
                <label for="">Phone Number:</label>
                <input type="tel" name="phoneNumber" id="number"><br>
                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                <label for="">Role:</label>
                <select name="role_id" id="role">
                    @foreach ($roles as $role)
                        <option value={{ $role->id }}>{{ $role->role }}</option>
                    @endforeach
                </select><br>
                <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
                <label for="">Password:</label>
                <input type="password" name="password" id="passwd"><br>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <label for="">Country:</label>
                <input type="text" name="country" id="country"><br>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                <label for="">Province:</label>
                <input type="text" name="province" id="province"><br>
                <x-input-error :messages="$errors->get('province')" class="mt-2" />
            </div>
        </div>
        <div class="btnAdd">
            <button type="submit" id="add">Add User</button>
        </div>
    </form>
    <x-footer></x-footer>
</body>

</html>
