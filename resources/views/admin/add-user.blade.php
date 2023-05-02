<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
                <label for="">Email:</label>
                <input type="email" name="email" id="email"><br>
                <label for="">Postal Code:</label>
                <input type="text" name="postalCode" id="code"><br>
                <label for="">Address:</label>
                <input type="text" name="address" id="address"><br>
                <label for="">City:</label>
                <input type="text" name="city" id="city"><br>
            </div>
            <div class="column-two">
                <label for="">Phone Number:</label>
                <input type="tel" name="phoneNumber" id="number"><br>
                <label for="">Role:</label>
                <select name="role_id" id="role">
                    @foreach ($roles as $role)
                        <option value={{ $role->id }}>{{ $role->role }}</option>
                    @endforeach
                </select><br>
                <label for="">Password:</label>
                <input type="password" name="password" id="passwd"><br>
                <label for="">Country:</label>
                <input type="text" name="country" id="country"><br>
                <label for="">Province:</label>
                <input type="text" name="province" id="province"><br>
            </div>
        </div>
        <div class="btnAdd">
            <button type="submit" id="add">Add User</button>
        </div>
    </form>
    <x-footer></x-footer>
</body>

</html>
