@extends('layouts.dashboard')
@section('content')
<form action="/admin/image" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="image">
<input type="submit" value="submit">
</form>
<ul>
@foreach($photos as $photo)
    <li>
    {{$photo->image}} <img src="{{asset('storage/photo/'.$photo->image) }" width='100px'>
    </li>
@endforeach
</ul>
@endsection