@extends('layouts.app')

@section('content')

    <h2>Nuevo post</h2>

    <form action="{{route('sendPost')}}" method="post">
        @csrf
        <label>Titulo</label></lavel><br>
        <input type="text" name="title" required><br>
        <label>Mensaje</label><br>
        <textarea name="text" cols="80" rows="10"></textarea><br>
        <input type="submit" name="send" value="Enviar">

    </form>
    <a href="{{route('show_all.index')}}" class="btn-primary w-25">Atras</a>

@endsection
