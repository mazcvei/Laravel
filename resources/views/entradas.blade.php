@extends('layouts.app')

@section('content')
    <h2>{{$titulo}}</h2>
    <p>Hay {{$num}} entrada(s)</p>

        @foreach($posts as $post)
            <hr>
            @if(!$posts)
                <p>No hay entradas.</p>
            @endif
            <p>ID:{{$post->id}}</p>
            <p>Titulo:{{$post->title}}</p>
            <p>Texto:{{$post->article}}</p>
            <p>Fecha de creación:{{$post->created_at}}</p>
            <p>Fecha de actualizacion:{{$post->updated_at}}</p>
            <form method="get" action="{{route('home')}}">
                <button type="submit" class="alert-danger">Continue</button>
            </form>
        @endforeach



@endsection