@extends('default')
@section('content')
<h1>Admin Scherm</h1>
<article>
    <h2>Ban iemand</h2>
    <form method="POST">
        @csrf
        <label>Gebruikersnaam:</label>
        <input type="text" name="persoon">
        <button type="submit">BAN</button>
    </form>
</article>

<article>
    <h2>Verwijder oppas aanvragen</h2>
    <ul>
        @foreach($dier as $dier)
            @include('components.animalCard--lijst')
        @endforeach
    </ul>
    
</article>
@endsection