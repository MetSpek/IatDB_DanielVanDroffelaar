<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>PassenOpJeDier</title>
    @yield('js')
    <script>
        var open = false;
        var onError = false;
        window.onload = function(){
            for(i = 1; i < 7; i++){
                if(window.location.href == "http://localhost:8000/error/" + i){
                    onError = true;
                    localStorage.setItem("melding", "false");
                    localStorage.setItem("message", " ");
                }
            }
            if(onError == false){
                if(localStorage.getItem("melding") == "true"){
                document.getElementById("-js--melding-tekst").innerHTML = localStorage.getItem("message");
                document.getElementById("-js--melding").style.height  = "4rem";
                localStorage.setItem("melding", "false");
                localStorage.setItem("message", " ");
                setTimeout(function(){ document.getElementById("-js--melding").style.height = "0rem"}, 5000);
                }
            }

        }
    
       function menu(){
        if(open == false){
            document.getElementById("--js-menu").style.width = "20rem";
            document.getElementById("--js-menu-icon").innerHTML = "&#9932;";
            open = true;
        } else {
            document.getElementById("--js-menu").style.width = "0rem";
            document.getElementById("--js-menu-icon").innerHTML = "&#9776;";
            open = false;
        }

       
       }
    </script>
    <link rel="stylesheet" href="/css/main.css">
    
</head>
<body>
    <div class="header_background">
        <header class="header">
            <a href="/" class="header__logo">PassenOpJeDier</a>
            <button class="header_dropdown" onclick="menu()" id="--js-menu-icon">&#9776;</button>
            <nav class="header__menu" id="--js-menu">
                <ul class="header__menu__list">
                    <li><a href="/" class="header__menu__link" >Home</a></li>
                    <li><a href="/profiel/{{$user->id}}" class="header__menu__link">Mijn profiel</a></li>
                    <li><a href="/dierenlijst" class="header__menu__link">Dierenlijst</a></li>
                    <li><form method="POST" action="/logout">
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
    </div>
    

    <section class="melding">
        <div class="melding__div" id="-js--melding">
            <p class="melding__div__tekst" id="-js--melding-tekst">Melding</p>
        </div>
    </section>
    @yield('content')
</body>
</html>