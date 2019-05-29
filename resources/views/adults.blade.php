@extends('layouts.app')

@section('content')
     <h2>{{$title}}</h2>
     <p>Hola {{$name}}, puedes acceder, tu edad es: {{$age}} :)</p>

     <form action="{{route('finishsession')}}" method="post">
         @csrf
         <input type="submit" class="btn btn-danger" name="exit" value="Logout">
     </form>
@endsection
