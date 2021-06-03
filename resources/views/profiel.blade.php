@extends('default')
@section('content')
<main class="profiel">
    <h1 class="profiel__naam">{{$persoon->name}}</h1> 
    <article class="card_container profiel__gallerij card_wide">
        <h2 class="profiel__gallerij__title">Gallerij</h2>
        <a href="/imageUpload" class="button button_send button_topRight">Voeg afbeelding toe</a>
        <ul class="profiel__gallerij__lijst">
            @foreach($image as $image)
                @include('components.pictureCard')
            @endforeach
        </ul>
    </article>
    <article class="card_container profiel__review card_wide">
        <h2 class="profiel__review__title">Recensies</h2>
        <ul>
            @foreach($review as $review)
                @include('components.reviewCard')
            @endforeach
        </ul>
    </article>
</main>
@endsection