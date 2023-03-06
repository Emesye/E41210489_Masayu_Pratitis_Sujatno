@extends('layouts.main')

@section ('container')
 @foreach ($postingan as $post)
 <article class = "mb-3">
    <h2>{{$post["judul"]}}</h2>
    <h5>{{$post["Penulis"]}}</h5>
    <p>{{$post["body"]}}</p>
 </article>
 @endforeach
@endsection
