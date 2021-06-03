@extends('default')
@section('js')
<script>
     function review(){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Recensie is gestuurd");
    }

</script>
@endsection

@section('content')
<main class="review">
    <article class="card_container">
        <a class="terug" href="/dierenlijst">&lt; Terug</a>
        <h1 class="top">Recensie {{$user->name}}</h1>
        <p class="bottom">Alles met een * is verplicht.</p>
        <form class="review__form" method="POST">
            @csrf
            <label for="score">Score  (0 - 10)*</label>
            <select class="bottom form__input_kort" name="score" id="score">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label for="comment">Commentaar</label>
            <textarea class="bottom  form__input_groot" name="comment" id="comment"></textarea>
        
            <input type="hidden" name="reviewed" value="{{$user->id}}">
            <button class="button button_send" type="submit" onclick="review()">Verstuur</button>
        </form>

    </article>

</main>
    
    
@endsection