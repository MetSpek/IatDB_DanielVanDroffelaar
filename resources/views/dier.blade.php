@extends('default')
@section('content')
<article>
    <a href="/dierenlijst">< Terug</a>
    <section>
        <h2>{{$dier->name}}</h2>
        <h3>{{$dier->kind}}</h3>
        <ul>
            <li>Van:</li>
            <li>{{$dier->start}} {{$dier->from}}</li>
            <li>tot:</li>
            <li>{{$dier->end}} {{$dier->to}}</li>
        </ul>
    </section>

    <section>
        <form method="POST">
            @csrf
            <input type="text" name="dier_naam" value={{$dier->name}}></input>
            <input type="number" name="eigenaar_id" value={{$user->id}}></input>
        <button type="submit">Ik wil oppassen!</button>
        </form>
        
        <h1>Reacties</h1>
    </section>

</article>

@endsection