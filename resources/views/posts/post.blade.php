@extends('layouts.app')

@section('content')


    @foreach($posts as $post)
        <hr>
        <p>ID:{{$post->id}}</p>
        <p>Titulo:{{$post->title}}</p>
        <p>Texto:{{$post->article}}</p>
        <p>Fecha de creación:{{$post->created_at}}</p>
        <p>Fecha de actualizacion:{{$post->updated_at}}</p>


    <a href="{{route('show_all.index')}}" class="ntm btn-danger">Atras</a>
    <a href="{{route('editPost',$post->id)}}" class="ntm btn-primary">Editar</a>
    <a href="{{route('deletePost',$post->id)}}" class="ntm btn-primary">Eliminar</a>
    <a href="" class="ntm btn-primary">Añadir comentario</a>
    @endforeach

@endsection