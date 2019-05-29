@extends('layouts.app')

@section('content')


    <form action="{{route('savesesion')}}" method="post">
         @csrf
         <label>¿Cuál es tu edad?</label></lavel><br>
         <input type="text" name="age" required><br>
         <label>¿Cuál es tu nombre?</label></lavel><br>
         <input type="text" name="name" required><br>

         <input type="submit" name="send" value="Enviar">
    </form>
@endsection
