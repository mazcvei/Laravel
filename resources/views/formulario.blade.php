@extends('layouts.app')

@section('content')
    <h2>Formulario</h2>
<p>Aqui va el formulario del blog</p>
    <form action="" method="post">
       <label>Nombre:</label></lavel> <input type="text" name="name"><br>
        <label>Apellidos:</label></lavel> <input type="text" name="surname"><br>
        <label>Edad:</label></lavel> <input type="number" name="age"><br>
        <input type="submit" name="send" value="Enviar">

    </form>
@endsection
