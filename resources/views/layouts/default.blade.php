<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{asset('css/layout.css')}}>
</head>
<body>

    <div class="nav">
        @if(Auth::user())
            <form class="navLogoutForm" action="/auth/logout" method="POST">
                @csrf
                <input class="navLogout" type="submit" value="Logout">
            </form>
        @else
            <a class="navItem" href="/auth/login">Login</a>
            <a class="navItem" href="/auth/register">Register</a>
        @endif
    </div>
    
    <div class="content">
        @yield('content')
    </div>

</body>
</html>