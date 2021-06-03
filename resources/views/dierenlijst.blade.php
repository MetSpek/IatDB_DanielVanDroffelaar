@extends('default')
@section('js')
    <script src="/js/main.js" defer></script>
@endsection
@section('content')
<main class="dierenlijst">
    <h1 class="dierenlijst__titel" >Dierenlijst</h1>
    
    <article class="card_container dierenlijst__filter card_wide">
        <h2>Filter</h2>
        <ul class="dierenlijst__filter__lijst">
            <li> 
                <label class="checkbox" for="Hond">Hond
                    <input type="checkbox" name="Hond" id="Hond" />
                    <span class="checkmark"></span>
                </label>
                
                
            </li>
            <li>
                <label class="checkbox" for="Kat">Kat
                    <input type="checkbox" name="Kat" id="Kat" />
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox" for="Vogel">Vogel
                    <input type="checkbox" name="Vogel" id="Vogel" />
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox" for="Rat">Rat
                    <input type="checkbox" name="Rat" id="Rat" />
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox" for="Reptiel">Reptiel
                    <input type="checkbox" name="Reptiel" id="Reptiel" />
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox" for="Anders">Anders
                    <input type="checkbox" name="Anders" id="Anders" />
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
    </article>
    
    <article class="card_container dierenlijst__dieren card_wide">
        <h2 class="dierenlijst__dieren__titel">Dieren</h2>
        <a href="/maakdier" class="button button_topRight button_send">Voeg een huisdier toe!</a>
        <ul class="dierenlijst__dieren__lijst">
            @foreach($dier as $dier)
                @include('components.animalCard--public')
            @endforeach
        </ul>
    </article>
</main>
@endsection