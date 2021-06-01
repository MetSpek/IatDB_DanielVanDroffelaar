@extends('default')
@section('js')
<script>
    var mysql = require('mysql');

    var con = mysql.createConnection({
    host: "localhost",
    user: "yourusername",
    password: "yourpassword",
    database: "mydb"
    });


    function weigerVerzoek(){
        console.log("yo mama")
    }
    

</script>
@endsection

@section('content')
<header>
    <h1>welkom {{$user->name}}!</h1>
</header>

<article>
    <h3>Je dieren</h3>
    <section>
        @foreach($dier as $dier)
            @include('components.animalCard--lijst')
        @endforeach
    </section>
    <a href="/maakdier">Voeg een huisdier toe!</a>
</article>

<article>
    <h3>Gekregen verzoeken</h3>
    @foreach($verzoek as $verzoek)
        @include('components.verzoek')
    @endforeach
</article>


@endsection