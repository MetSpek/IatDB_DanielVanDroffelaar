@extends('default')

@section('content')
<form method="POST" enctype="multipart/form-data">
    @csrf     
    <label for="image">Uw omgeving foto (max 2MB)</label>      
    <input type="file" name="image" id="image" required>       
    <button type="submit" class="btn btn-success">Upload</button>
</form>
@endsection