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
<main class="admin">
    <h1 class="admin__titel">Admin Scherm</h1>
    <article class="card_container admin__ban">
        <h2>Ban iemand</h2>
        <form class="admin__ban__form" method="POST">
            @csrf
            <label for="persoon">Gebruikersnaam:</label>
            <input class="form__input_lang" type="text" name="persoon" id="persoon" required>
            <button class="button button_verwijder" type="submit" onclick="submitForm()">BAN</button>
        </form>
    </article>

    <article class="card_container admin__oppas">
        <h2>Verwijder oppas aanvragen</h2>
        <ul>
            @foreach($dier as $dier)
                @include('components.animalCard--lijst')
            @endforeach
        </ul>
        
    </article>
</main>

@endsection