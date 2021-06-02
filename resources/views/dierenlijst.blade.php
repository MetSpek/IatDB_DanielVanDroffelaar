@extends('default')
@section('js')
    <script src="/js/main.js" defer></script>
@endsection
@section('content')
<section>
    <h1>Dierenlijst</h1>
    <a href="/maakdier">Voeg een huisdier toe!</a>

    <h2>Filter</h2>
    <label for="Hond">Hond</label>
    <input type="checkbox" name="Hond" id="Hond" />

    <label for="Kat">Kat</label>
    <input type="checkbox" name="Kat" id="Kat" />

    <label for="Vogel">Vogel</label>
    <input type="checkbox" name="Vogel" id="Vogel" />

    <label for="Rat">Rat</label>
    <input type="checkbox" name="Rat" id="Rat" />

    <label for="Reptiel">Reptiel</label>
    <input type="checkbox" name="Reptiel" id="Reptiel" />

    <label for="Anders">Anders</label>
    <input type="checkbox" name="Anders" id="Anders" />
    

    <ul>
        @foreach($dieren as $dier)
            @include('components.animalCard--public')
        @endforeach
    </ul>

</section>

@endsection