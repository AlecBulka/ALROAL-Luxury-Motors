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
    <form action="{{ route('admin-update-users', $user) }}" method="post">
        @csrf
        @method('PUT')
        <div class="user-details">
            <div class="column-one">
                <label for="">Name:</label>
                <input type="text" name="name" id="name" value="{{$user->name}}"><br>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <label for="">Email:</label>
                <input type="email" name="email" id="email" value="{{$user->email}}"><br>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="">Postal Code:</label>
                <input type="text" name="postalCode" id="code" value="{{$user->billing->postalCode}}"><br>
                <x-input-error :messages="$errors->get('postalCode')" class="mt-2" />
                <label for="">Address:</label>
                <input type="text" name="address" id="address" value="{{$user->billing->address}}"><br>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                <label for="">City:</label>
                <input type="text" name="city" id="city" value="{{$user->billing->city}}"><br>
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <div class="column-two">
                <label for="">Phone Number:</label>
                <input type="tel" name="phoneNumber" id="number"  value="{{$user->phoneNumber}}"><br>
                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                <label for="">Role:</label>
                <select name="role_id" id="role">
                    @foreach ($roles as $role)
                    @if ($user->role_id == $role->id)
                    <option value={{ $role->id }} selected>{{ $role->role }}</option>
                    @else
                    <option value={{ $role->id }}>{{ $role->role }}</option>
                    @endif
                    @endforeach
                </select><br>
                <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
                <label for="">Password:</label>
                <input type="password" name="password" id="passwd"><br>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <label for="">Country:</label>
                <input type="text" name="country" id="country" value="{{$user->billing->country}}"><br>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                <label for="">Province:</label>
                <input type="text" name="province" id="province" value="{{$user->billing->province}}"><br>
                <x-input-error :messages="$errors->get('province')" class="mt-2" />
            </div>
        </div>
        <div class="btnAdd">
            <button type="submit" id="add">Save Changes</button>
        </div>
    </form>
    <x-footer></x-footer>
</body>

</html>
