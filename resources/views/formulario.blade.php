@extends('layouts.app')

@section('content')

    <h2>Formulario</h2>
<p>Aqui va el formulario del blog</p>
    <form action="{{route('sendForm')}}" method="post">
        @csrf
       <label>Nombre:</label></lavel> <input type="text" name="name" required><br>
        <label>Apellidos:</label></lavel> <input type="text" name="surname" required><br>
        <label>Edad:</label></lavel> <input type="number" name="age" required><br>
        <textarea name="text" cols="20" rows="10"></textarea><br>
        <input type="submit" name="send" value="Enviar">

    </form>
@endsection
