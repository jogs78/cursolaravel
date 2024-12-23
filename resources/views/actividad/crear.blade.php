@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <p>Haz una descripcion detallada de las actividades especificas que tienes planeadas</p><br>
    <form action="{{route("proyectos.actividades.store",$proyecto->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='nombre'>Nombre de la actividad</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}"><br>
        
        <label for='descripcion'>Describe como realizaras tal actividad </label>
        {{$errors->first("descripcion")}}
        
        <textarea name='descripcion' id='descripcion' value="{{old('descripcion')}}"></textarea><br>

        <label for='semanas'>En cuantas semanas reliazaras tal actividad</label>
        {{$errors->first("semanas")}}
        <input type='number' name='semanas' id='semanas' value="{{old('semanas')}}"><br>

        <label for='orden'>Cual es el orden de esta actividad</label><br>
        {{$errors->first("orden")}}
        <input type='number' name='orden' id='orden' value="{{old('orden')}}"><br>

        
        <input type='submit'> <!-- Crear un boton o enlace para tener mas actividades -->
    </form>


    @endsection