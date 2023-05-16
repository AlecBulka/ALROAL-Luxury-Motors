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
    <link rel="stylesheet" href={{ asset('style/admin/view-users.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin/>

    <div class="container">
        <h1 class="title">Users List</h1>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col" class="th">
                        NAME
                    </th>
                    <th scope="col" class="th">
                        EMAIL
                    </th>
                    <th scope="col" class="th">
                        PHONE NUMBER
                    </th>
                    <th scope="col" class="th">
                        ROLE
                    </th>
                    <th scope="col" class="th"></th>
                    <th scope="col" class="th"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="td">
                            {{$user->name}}
                        </td>
                        <td class="td">
                            {{$user->email}}
                        </td>
                        <td class="td">
                            {{$user->phoneNumber}}
                        </td>
                        <td class="td">
                            {{$user->role->role}}
                        </td>
                        <td class="td">
                            <button class="edit" aria-label="Edit"><a href="{{ route('admin-edit-users', $user) }}">Edit</a></button>
                        </td>
                        <td class="td">
                            <form action="{{ route('admin-delete-users', $user) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-footer />
</body>

</html>
