@extends('layouts.app')

@section('content')

    <h2>Nuevo post</h2>

    <form action="{{route('sendPost')}}" method="post">
        @csrf
        <label>Titulo</label></lavel><br>
        <input type="text" name="title" required><br>
        <label>Mensaje</label><br>
        <textarea name="text" cols="80" rows="10" required></textarea><br>
        <input type="button" name="back" href="{{'show_all.index'}}" value="Volver">
        <input type="submit" class="btn btn-success" name="send" value="Enviar">
        <input type="reset" class="btn btn-danger" name="reset" value="Borrar">
    </form>

@endsection
