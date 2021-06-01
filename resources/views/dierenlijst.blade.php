@extends('default')
@section('content')
<section>
    <h1>Dierenlijst</h1>
    <a href="/maakdier">Voeg een huisdier toe!</a>
    <ul>
        @foreach($dieren as $dier)
            @include('components.animalCard--lijst')
        @endforeach
    </ul>

</section>

@endsection