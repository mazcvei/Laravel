@extends('layouts.app')

@section('content')
    <h2>{{$titulo}}</h2>
@foreach($posts as $post)
    <p>Titulo:{{$post->title}}</p>
    <p>Texto:{{$post->article}}</p>
    <p>Fecha de creación:{{$post->created_at}}</p>
    <p>Fecha de actualizacion:{{$post->updated_at}}</p>
@endforeach


@endsection