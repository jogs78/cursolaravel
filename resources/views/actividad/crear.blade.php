@extends('plantillas.app')
<style>
.cmenor{background-color: rgb(40, 95, 139);}
.cmayor{background-color: rgb(19, 46, 68);}
.linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 90%;} 
.hderecho {display: flex; justify-content: right; }
.horizontal {display: flex; justify-content: center; width: 100%;}
.centro{display: flex; justify-content: center;}
.titulo{text-align:center; font-size: 50px; font-weight: bold;}
.subtitulo{text-align:center; font-size: 45px; font-weight: bold;}
.parrafo{font-size: 30px; margin-top:30px;}
.boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; border: none; cursor: pointer; margin-top:30px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{height: 25px; font-size: 18px;  margin-top: 30px;}
*{margin: 0; padding: 0;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')
<div style="margin-top:20px;">
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
</div>
    @endsection