<article>
        <h2>{{$dier->name}}</h2>
        <h3>{{$dier->kind}}</h3>
        <h4>{{$dier->costs}}$ per uur</h4>
        <ul>
            <li>Van:</li>
            <li>{{$dier->start}} {{$dier->from}}</li>
            <li>tot:</li>
            <li>{{$dier->end}} {{$dier->to}}</li>

            <a href="/dierenlijst/{{$dier->id}}">Meer informatie</a>
        </ul>
</article>