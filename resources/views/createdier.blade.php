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
<main class="maakdier">
    <h1 class="maakdier__titel">Aanmaken oppas verzoek</h1>
    <article class="card_container maakdier__article">
        <h2>Aanvraag formulier</h2>
        <p>Alles met een * is verplicht.</p>
        <form class="maakdier__article__form" method="POST" id="-js--maak-dier" enctype="multipart/form-data">
        @csrf
    
        <label for="name">Huisdier Naam *</label>
        <input class="maakdier__article__form__input form__input_lang" type="text" name="name" id="name" required>

        <label for="image">Foto van dier (max 2MB)*</label>      
        <input class="maakdier__article__form__input" type="file" name="image" id="image" required>

        <label for="soort">Soort Dier *</label>
        <select class="maakdier__article__form__input form__input_kort" name="soort" id="soort">
            @foreach($soort as $soort)
                @include('components.soorten--option')
            @endforeach
        </select>

        <label for="costs">Dag tarief in euro *</label>
        <input class="maakdier__article__form__input form__input_kort" type="number" name="costs" id="costs" min="0" step="any" required>

        <label for="place">Plaats van wonen *</label>
        <input class="maakdier__article__form__input form__input_lang" type="text" name="place" id="place" required>

        <label for="start">Van *</label>
        <input class="maakdier__article__form__input form__input_middel" type="date" name="start" id="start" required>
        <input class="maakdier__article__form__input form__input_kort" type="time" name="from" id="from">

        <label for="end">Tot *</label>
        <input class="maakdier__article__form__input form__input_middel" type="date" name="end" id="end" required>
        <input class="maakdier__article__form__input form__input_kort" type="time" name="to" id="to">

        <label>Opmerkingen</label>
        <textarea class="maakdier__article__form__input form__input_groot"  name="comment"></textarea>

        <button class="button button_send" type="submit" onclick="submitForm()">Maak aan</button>
        </form>
    </article>


</main>

@endsection