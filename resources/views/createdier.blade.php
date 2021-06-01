@extends('default')
@section('content')
<form method="POST">
    @csrf
<label>Naam</label>
<input type="text" name="name">

<label>Soort</label>
<input type="text" name="kind">

<label>Uur tarief in euro</label>
<input type="number" name="costs" step="any">

<label>Van</label>
<input type="date" name="start">
<input type="time" name="from">

<label>Tot</label>
<input type="date" name="end">
<input type="time" name="to">

<button type="submit">Maak aan</button>
</form>
@endsection