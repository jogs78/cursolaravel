@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <h2>Actualiza tus datos</h2>

    <form action="{{route("estudiantes.update",$estudiante->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        @method('PUT')
        <label for='nombre'>Nombre/s</label>
        <input type='text' name='nombre' id='nombre' value="{{$estudiante->nombre}}"><br>

        <label for='apellidos'>Apellidos</label>
        <input type='text' name='apellidos' id='apellidos'value="{{$estudiante->apellidos}}"><br>

        <label for='correo'>Correo Electronico</label>
        <input type='email' name='correo' id='correo'value="{{$estudiante->correo}}"><br>

        <label for='nombreproyecto'>Nombre del Proyecto</label>
        <input type='text' name='nameproyecto' id='nameproyecto'value="{{$estudiante->nameproyecto}}"><br>



        <label for='nombreasesor'>Nombre/s Del Asesor Interno</label>
        <input type='text' name='nombreasesor' id='nombreasesor'value="{{$estudiante->nombreasesor}}"><br>

        <label for='apellidoasesor'>Apellidos Del Asesor Interno</label>
        <input type='text' name='apellidosasesor' id='apellidosasesor'value="{{$estudiante->apellidosasesor}}"><br>



        <input type='submit'>
    </form>

    @endsection