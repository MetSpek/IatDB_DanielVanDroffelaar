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
<article>
    <a href="/dierenlijst">< Terug</a>
    <section>
        <h2>{{$dier->name}}</h2>
        <h3>Eigenaar: {{$eigenaar->name}}</h3>
        <h3>{{$dier->soort}}</h3>
        <h4>{{$dier->costs}} euro per uur</h4>
        <h5>Opmerkingen: </h5>
        <p>{{$dier->comment}}</p>
        <ul>
            <li>Van:</li>
            <li>{{$dier->start}} {{$dier->from}}</li>
            <li>tot:</li>
            <li>{{$dier->end}} {{$dier->to}}</li>
        </ul>
    </section>
    
    <section>
        <form id="verzoek" method="POST">
            @csrf
            <input type="hidden" name="dier_id" value={{$dier->number}}></input>
            <input type="hidden" name="dier_naam" value={{$dier->name}}></input>
            <input type="hidden" name="eigenaar_id" value={{$dier->eigenaar}}></input>
            <button type="submit" onclick="verzoek()">Ik wil oppassen!</button>
        </form>
        
    </section>

</article>

@endsection