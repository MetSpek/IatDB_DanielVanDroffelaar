

<section>
    <h3>{{$verzoek->zoeker_naam}} wil graag op {{$verzoek->dier_naam}} passen!</h3>
    <a href="/profiel/{{$verzoek->zoeker_id}}">Bekijk profiel</a>
    <button>Accepteren</button>
    <button onclick="weigerVerzoek()">Weigeren</button>

</section>