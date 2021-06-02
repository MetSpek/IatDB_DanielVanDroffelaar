@extends('default')
@section('js')
<script>
     function review(){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Review is gestuurd");
    }

</script>
@endsection

@section('content')
    <article>
        <a href="/dierenlijst">< Terug</a>
        <h1>Review</h1>
        <p>Alles met een * is verplicht.</p>
        <h2>Write a review for {{$user->name}}</h2>
        <form method="POST">
            @csrf
            <label for="score">Score  (0 - 10)*</label>
            <input type="number" name="score" id="score" max="10" min="0" required>

            <label for="comment">Commentaar</label>
            <input type="text" name="comment" id="comment">
        
            <input type="number" name="reviewed" value="{{$user->id}}">
            <button type="submit" onclick="review()">Verstuur</button>
        </form>

    </article>
    
@endsection