@extends('layouts.app')

@section('content')


    @foreach($posts as $post)
        <hr>
        <p>ID:{{$post->id}}</p>
        <p>Titulo:{{$post->title}}</p>
        <p>Texto:{{$post->article}}</p>
        <p>Fecha de creación:{{$post->created_at}}</p>
        <p>Fecha de actualizacion:{{$post->updated_at}}</p>
        <form method="any" action="{{route('showPost',$post->id)}}">
            <button type="submit" class="alert-danger">Continue</button>
        </form>
    @endforeach
    <a href="{{route('show_all.index')}}" class="btn-primary w-25">Atras</a>


@endsection