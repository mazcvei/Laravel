@extends('layouts.app')

@section('content')
    <h2>{{$titulo}}</h2>
    <form method="any" action="{{route('newPost')}}">
        <button type="submit" class="alert-primary">Nueva entrada</button>
    </form>{{$posts->render()}}
    <p>Hay {{$num}} entrada(s)</p>
    @if($num==0)
        <p>Todavía no se ha escrito nada, sé el primero en compartir noticias</p>
    @endif
    @foreach($posts as $post)
        <hr>
        <p>ID:{{$post->id}}</p>
        <p>Titulo: {{$post->title}}</p>
        <p>Texto: {{$post->article}}</p>
        <p>Fecha de creación:{{$post->created_at}}</p>
        <p>Fecha de actualizacion:{{$post->updated_at}}</p>
        <form method="any" action="{{route('showPost',$post->id)}}">
            <button type="submit" class="alert-danger">Ver</button>
        </form>

    @endforeach
    {{$posts->render()}}



@endsection