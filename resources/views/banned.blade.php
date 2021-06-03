@extends('default')
@include('components.resetLocalStorage')

@section('content')
<main>
    <article class="card_container card_banned">
        <h1>JE BENT VERBANNEN</h1>
        <h2>denk voortaan wat meer na...</h2>
        <img class="banned__image"
        srcset="/storage/images/pepe.webp 640w"
        sizes="(min-width: 100px) 640px"
        src="/storage/images/pepe.png"
        alt="Een foto van een zielige kikker">
    </article>
</main>

@endsection