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

        <label for='apellido_paterno'>apellido_paterno</label>
        <input type='text' name='apellido_paterno' id='apellido_paterno'value="{{$estudiante->apellido_paterno}}"><br>

        <label for='apellido_materno'>apellido_materno</label>
        <input type='text' name='apellido_materno' id='apellido_materno'value="{{$estudiante->apellido_materno}}"><br>

        <label for='correo_electronico'>Correo Electronico</label>
        <input type='email' name='correo_electronico' id='correo_electronico'value="{{$estudiante->correo_electronico}}"><br>


<!--
        <label for='nombreproyecto'>Nombre del Proyecto</label>
        <input type='text' name='nameproyecto' id='nameproyecto'value="{{$estudiante->nameproyecto}}"><br>

        <label for='nombreasesor'>Nombre/s Del Asesor Interno</label>
        <input type='text' name='nombreasesor' id='nombreasesor'value="{{$estudiante->nombreasesor}}"><br>

        <label for='apellidoasesor'>Apellidos Del Asesor Interno</label>
        <input type='text' name='apellidosasesor' id='apellidosasesor'value="{{$estudiante->apellidosasesor}}"><br>
-->


        <input type='submit'>
    </form>

    @endsection