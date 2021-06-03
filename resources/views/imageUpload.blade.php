@extends('default')
@section('js')
<script>
     function foto(){
        localStorage.setItem("melding", "true");
        localStorage.setItem("message", "Foto geupload!");
    }

</script>
@endsection
@section('content')
<main>
    <h1 class="imageupload_titel">Upload Foto</h1>
    <article class="card_container imageupload">
       
        <form method="POST" enctype="multipart/form-data">
        @csrf     
        <label for="image">Je omgevings foto (max 2MB)</label>      
        <input type="file" name="image" id="image" required>       
        <button class="button button_send" onclick="foto()" type="submit">Upload</button>
        </form>
    </article>
</main>

@endsection