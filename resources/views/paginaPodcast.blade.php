@extends('layouts.plantilla')

@section('content')



<form action="{{ route('checkUsuario')}}" method="POST" class="agregarAlumno">
    @csrf
    <legend>email:</legend>
    <input type="text" name="email" id="">
    <legend>contraseña:</legend>
    <input type="text" name="password" id="">
    <input type="submit" value="iniciar sesion">
</form>




@endsection