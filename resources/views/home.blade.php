@extends('layout.app')

@section('main')
<h1>posts</h1>
@foreach($posts as $key => $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
@endforeach
@stop
