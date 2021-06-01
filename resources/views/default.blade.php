<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('css') 
    @yield('js')
    <link rel="stylesheet" href="/css/menu.css">
    <title>PassenOpJeDier</title>
</head>
<body>
    <header class="header">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profiel/{{$user->id}}">Mijn profiel</a></li>
                <li><a href="/dierenlijst">Dierenlijst</a></li>
                <li><form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log uit') }}
                            </x-dropdown-link>
                        </form></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>