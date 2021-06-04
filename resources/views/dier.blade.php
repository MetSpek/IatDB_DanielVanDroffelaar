@extends('default')
@section('js')
<script>
     function verzoek(){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Oppas verzoek is ingedient");
    }

</script>
@endsection
@section('content')
<main class="dierinfo">
    <article class="card_container">
        <a class="terug" href="/dierenlijst">&lt; Terug</a>
        <section class="dierinfo_section">
            <figure class="bottom dierinfo__figure">
                <img class="dierinfo__figure__image"  src="/storage/images/{{$dier->image}}" alt="Foto van het dier">
            </figure>
            <h2>{{$dier->name}} - {{$dier->soort}}</h2>
            <h3 class="bottom">Eigenaar: {{$eigenaar->name}}</h3>
            <h3 class="bottom">Woonplaats: {{$dier->plaats}}</h3>
            <h4 class="bottom">{{$dier->costs}}€ per dag</h4>
            <h5>Datum/Tijd: </h5>
            <p> Van: {{$dier->start}} {{$dier->from}}</p>
            <p class="bottom">Tot: {{$dier->end}} {{$dier->to}}</p>
            <h5>Opmerkingen: </h5>
            <p class="bottom">{{$dier->comment}}</p>
        </section>
        
        <section>
            <form id="verzoek" method="POST">
                @csrf
                <input type="hidden" name="dier" value={{$dier->number}}>
                <input type="hidden" name="dier_naam" value={{$dier->name}}>
                <input type="hidden" name="eigenaar" value={{$dier->eigenaar}}>
                <button class="button button_send" type="submit" onclick="verzoek()">Ik wil oppassen!</button>
            </form>
            
        </section>

    </article>
</main>


@endsection