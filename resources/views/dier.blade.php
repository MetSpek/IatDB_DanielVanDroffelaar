@extends('default')


@section('content')
<article>
    <a href="/dierenlijst">< Terug</a>
    <section>
        <h2>{{$dier->name}}</h2>
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
            <input type="number" name="dier_id" value={{$dier->number}}></input>
            <input type="text" name="dier_naam" value={{$dier->name}}></input>
            <input type="number" name="eigenaar_id" value={{$dier->eigenaar}}></input>
            <button type="submit">Ik wil oppassen!</button>
        </form>
        
    </section>

</article>

@endsection