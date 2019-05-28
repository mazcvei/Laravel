@extends('layouts.app')

@section('content')


    <form action="{{route('adult')}}" method="post">
         @csrf
         <label>¿Cuál es tu edad?</label></lavel><br>
         <input type="text" name="age" required><br>
         <input type="submit" name="send" value="Enviar">
    </form>
@endsection
