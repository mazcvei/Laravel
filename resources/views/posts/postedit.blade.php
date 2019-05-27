@extends('layouts.app')

@section('content')

    <h2>Editar post</h2>
    @foreach($postEdit as $post)
    <form action="{{route('updatePost',$post->id)}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        <label>Titulo</label></lavel><br>
        <input type="text" name="title" required placeholder="{!! $post->title !!}"><br>
        <label>Mensaje</label><br>
        <textarea name="text" cols="80" rows="10" required placeholder="{!! $post->article !!}"></textarea><br>
        <button class="btn btn-default">Cancelar</button>
        <button type="submit" name="update" class="ntm btn-primary">Actualizar</button>
    </form>
    @endforeach
    <a href="{{route('show_all.index')}}" class="btn-primary w-25">Atras</a>

@endsection
