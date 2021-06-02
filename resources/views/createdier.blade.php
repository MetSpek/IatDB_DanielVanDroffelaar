@extends('default')

@section('js')
<script>
    function submitForm(){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Huisdier oppas aanvraag aangemaakt");
    }

</script>
@endsection
@section('content')
<form method="POST" id="-js--maak-dier" enctype="multipart/form-data">
    @csrf
<h3>Aanvraag formulier</h3>
<p>Alles met een * is verplicht.</p>

<label for="name">Huisdier Naam *</label>
<input type="text" name="name" id="name" required>

<label for="image">Foto van dier (max 2MB)*</label>      
<input type="file" name="image" id="image" required>

<label for="soort">Soort Dier *</label>
<select name="soort" id="soort">
    @foreach($soort as $soort)
        @include('components.soorten--option')
    @endforeach
</select>

<label for="costs">Uur tarief in euro *</label>
<input type="number" name="costs" id="costs" step="any" required>

<label for="place">Plaats van wonen *</label>
<input type="text" name="place" id="place" required>

<label for="start">Van *</label>
<input type="date" name="start" id="start" required>
<input type="time" name="from" id="from">

<label for="end">Tot *</label>
<input type="date" name="end" id="end" required>
<input type="time" name="to" id="to">

<label>Opmerkingen</label>
<input type="text" name="comment">

<button type="submit" onclick="submitForm()">Maak aan</button>
</form>
@endsection