@extends('default')
@section('content')
<form method="POST">
    @csrf
<label>Naam</label>
<input type="text" name="name">

<label>Soort</label>
<select name="soort">
    @foreach($soort as $soort)
        @include('components.soorten--option')
    @endforeach
</select>

<label>Uur tarief in euro</label>
<input type="number" name="costs" step="any">

<label>Plaats</label>
<input type="text" name="place">

<label>Van</label>
<input type="date" name="start">
<input type="time" name="from">

<label>Tot</label>
<input type="date" name="end">
<input type="time" name="to">

<label>Opmerkingen</label>
<input type="text" name="comment">

<button type="submit">Maak aan</button>
</form>
@endsection