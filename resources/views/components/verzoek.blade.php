

<li class="verzoek">
    <h4 class="verzoek__title">{{$verzoek->zoeker_naam}} wil graag op {{$verzoek->dier_naam}} passen!</h4>
    <a class="button verzoek__profiel" href="/profiel/{{$verzoek->zoeker}}">Bekijk Profiel</a>
    <a class="button button_send verzoek__accepteren" href="/accepteer/{{$verzoek->dier}}/{{$verzoek->verzoek_id}}/{{$verzoek->zoeker}}">Accepteren</a>
    <a class="button button_verwijder verzoek__weigeren" href="/weiger/{{$verzoek->verzoek_id}}">Weigeren</a>
    
</li>