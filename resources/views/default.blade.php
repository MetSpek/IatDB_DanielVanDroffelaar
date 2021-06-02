<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    @yield('css') 
    @yield('js')
    <script>
        window.onload = function(){
            if(localStorage.getItem("melding") == "true"){
                document.getElementById("-js--melding-tekst").innerHTML = localStorage.getItem("message");
                document.getElementById("-js--melding").style.height  = "80px";
                localStorage.setItem("melding", "false");
                localStorage.setItem("message", " ");
                setTimeout(function(){ document.getElementById("-js--melding").style.height = "0px"}, 5000);
            }
        }
    
    </script>
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

    <section>
        <div id="-js--melding">
            <p id="-js--melding-tekst">Melding</p>
        </div>
    </section>
    <main>
        @yield('content')
    </main>
</body>
</html>