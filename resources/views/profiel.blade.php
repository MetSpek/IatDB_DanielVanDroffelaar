@extends('default')
@section('content')
<h1>{{$persoon->name}}</h1>


   
    
<article>
    <header><h2>Gallerij</h2></header>
    <ul>
        @foreach($image as $image)
            @include('components.pictureCard')
        @endforeach
    </ul>
    
    <a href="/imageUpload">Voeg afbeelding toe</a>
</article>

<article>
    <header><h2>Reviews</h2></header>
    <ul>
        @foreach($review as $review)
            @include('components.reviewCard')
        @endforeach
    </ul>
    
</article>
@endsection