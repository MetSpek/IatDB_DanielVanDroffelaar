@extends('default')
@section('js')
<script>
    function submitForm(){
        persoon = document.getElementById("persoon").value;
        message = persoon + " verbannen"
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", message);
    }

    function verwijder(url){
        console.log(url);
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Huisdier oppas aanvraag verwijdert");
        window.location.replace(url);
    }

</script>
@endsection


@section('content')
<h1>Admin Scherm</h1>
<article>
    <h2>Ban iemand</h2>
    <form method="POST">
        @csrf
        <label for="persoon">Gebruikersnaam:</label>
        <input type="text" name="persoon" id="persoon" required>
        <button type="submit" onclick="submitForm()">BAN</button>
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