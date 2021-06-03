
@section('js')
<script>
    function verwijder(url){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Huisdier oppas aanvraag verwijderd");
        window.location.replace(url);
    }

</script>
@endsection

<li class="gridCard dier" data-soort={{$dier->soort}}>
        <figure class="dier__figure">
            <img class="dier__figure__image"  src="\storage\images\{{$dier->image}}" alt="Foto van het dier">
        </figure>
        
        <h3 class="dier__naam">{{$dier->name}}</h3>
        <h3 class="dier__soort">{{$dier->soort}}</h3>
        <h4 class="dier__plaats">Woonplaats: {{$dier->plaats}}</h4>
        <h5 class="dier__geld">{{$dier->costs}}€ per dag</h4>
        <p class="dier__van">Van: {{$dier->start}}</p>
        <p class="dier__tot">Tot: {{$dier->end}}</p>
        
        <a class="button dier__info" href="/dierenlijst/{{$dier->number}}">Meer info</a>    
</li>