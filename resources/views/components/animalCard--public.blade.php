<li class="gridCard" data-soort={{$dier->soort}}>
        <figure>
            <img src="\storage\images\{{$dier->image}}" alt="Foto van het dier">
        </figure>
        <h2>{{$dier->name}}</h2>
        <h3>{{$dier->soort}}</h3>
        <h3>{{$dier->plaats}}</h3>
        <h4>{{$dier->costs}}$ per uur</h4>
        <ul>
            <li>Van:</li>
            <li>{{$dier->start}} {{$dier->from}}</li>
            <li>tot:</li>
            <li>{{$dier->end}} {{$dier->to}}</li>
        </ul>
            <a href="/dierenlijst/{{$dier->number}}">Meer informatie</a>
</li>