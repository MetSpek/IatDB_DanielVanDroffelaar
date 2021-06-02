@extends('default')
@section('content')
    <article>
        <h1>Review</h1>
        <h2>Write a review for {{$user->name}}</h2>
        <form method="POST">
            @csrf
            <label>Score  (0 - 10)</label>
            <input type="number" name="score">

            <label>Commentaar</label>
            <input type="text" name="comment">
        
            <input type="number" name="reviewed" value="{{$user->id}}">
            <button type="submit">Verstuur</button>
        </form>

    </article>
    
@endsection