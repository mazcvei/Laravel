@extends('layouts.app')

@section('content')
    {!! Form::open(['route'=>'savesesion','method'=> 'POST']) !!}
    {{Form::token()}}
    {{Form::label('', '¿Cuál es tu edad?')}}<br>
    {{Form::text('age')}}<br>
    {{Form::label('', '¿Cuál es tu nombre?')}}<br>
    {{Form::text('name')}}<br>
    {{Form::submit('Enviar')}}
    {!! Form::close() !!}

  {{--  <form action="{{route('savesesion')}}" method="post">
        @csrf
        <label>¿Cuál es tu edad?</label></lavel><br>
        <input type="text" name="age" required><br>
        <label>¿Cuál es tu nombre?</label></lavel><br>
        <input type="text" name="name" required><br>

        <input type="submit" name="send" value="Enviar">
    </form>--}}
@endsection
