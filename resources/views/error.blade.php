@extends('default')
@include('components.resetLocalStorage')

@section('content')
<main>
    <h1 class="error" >Oeps!</h1>
    <article class="card_container card_error">
        <h2>{{$error->error}}</h2>
        <a class="button button_bottom" href="{{$error->url}}">Ga terug</a>
    </article>
</main>
    
@endsection