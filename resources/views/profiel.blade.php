@extends('default')
@section('content')
<h1>Profiel</h1>

<section>
    <header><h2>Informatie</h2></header>
    <figure><img src="" alt=""></figure>
    <h3>{{$user->name}}</h3>
    <ul>
        <li><h4>Leeftijd: {{$user->age}} </h4></li>
        <li><h4>Woonplaats: {{$user->plaats}}</h4></li>
    </ul>
</section>

<section>
    <header><h2>Gallerij</h2></header>
   
    <a href="">Wijzig</a>
</section>

<section>
    <header><h2>Reviews</h2></header>
   
</section>
@endsection