

<li>
    <h3>{{$verzoek->zoeker_naam}} wil graag op {{$verzoek->dier_naam}} passen!</h3>
    <a href="/profiel/{{$verzoek->zoeker_id}}">Bekijk profiel</a>
    <a href="/accepteer/{{$verzoek->dier_id}}/{{$verzoek->verzoek_id}}/{{$verzoek->zoeker_id}}">Accepteren</a>
    <a href="/weiger/{{$verzoek->dier_id}}/{{$verzoek->verzoek_id}}">Weigeren</a>

</li>