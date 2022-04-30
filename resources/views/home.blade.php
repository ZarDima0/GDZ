<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GDZ</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
</head>

<body>
    <header>
        <div class="wrap-logo">
            <a href="/" class="logo">GDZ от Путина</a>
        </div>
        <nav>
            @if (Auth::check())
            <h1>{{Auth::user()->name}}</h1>
            <a href="{{route('create.file')}}">Добавить файл</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class='button-logout' :href="route('logout')" style='cursor:pointer' onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    <x-buttonLogout></x-buttonLogout>
                </a>
            </form>
            @else
            <a href='{{ route("register") }}'>Зарегистрироваться</a>
            <a href='{{ route("login") }}'>Войти</a>
            <a href="#home">Преподователи</a>
            @endif
        </nav>
    </header>
    <section>
        @yield('content')
    </section>
    <script src="{{ asset("js/app.js") }}"></script>
</body>

</html>