@extends('default')

@section('content')
<form method="POST" enctype="multipart/form-data">
    @csrf           
    <input type="file" name="image">       
    <button type="submit" class="btn btn-success">Upload</button>
</form>
@endsection