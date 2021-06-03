@extends('default')


@section('content')
<main class="index">
    <h1 class="index__welkom">Welkom {{$user->name}}!</h1>

    <article class="card_container index__aanvragen">
        <h2 class="index__aanvragen__titel bottom">Mijn oppas aanvragen</h2>
        <ul class="index__aanvragen__lijst">
            @foreach($dier as $dier)
                @include('components.animalCard--lijst')
            @endforeach
        </ul>
            <a class="button button_bottom button_send" href="/maakdier">Voeg een huisdier toe!</a>
    </article>

    <article class="card_container index__verzoeken">
        <h2 class="index__verzoeken__titel bottom">Gekregen oppas verzoeken</h2>
        <ul class="index__verzoeken__lijst">
            @foreach($verzoek as $verzoek)
                @include('components.verzoek')
            @endforeach
        </ul>
        
    </article>
</main>



@endsection