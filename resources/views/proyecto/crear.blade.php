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
    <p>Proyecto</p>

    <form action="{{route("proyectos.store")}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='nombre'>Nombre/s</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}"><br>

        <label for='objetivo_general'>Objetivo General</label>
        {{$errors->first("objetivo_general")}}
        <input type='text' name='objetivo_general' id='objetivo_general' value="{{old('objetivo_general')}}"><br>

        <label for='lugar'>Lugar</label>
        {{$errors->first("lugar")}}
        <input type='text' name='lugar' id='lugar' value="{{old('lugar')}}"><br>

        <label for='informacion'>Informacion</label>
        {{$errors->first("informacion")}}
        <input type='text' name='informacion' id='informacion' value="{{old('informacion')}}"><br>

        <label for='justificacion'>Justificacion</label>
        {{$errors->first("justificacion")}}
        <input type='text' name='justificacion' id='justificacion' value="{{old('justificacion')}}"><br>


        <label for='asesor_id'>Asesor</label>
        <select name="asesor_id" id="asesor_id">
         
            @foreach ($asesores as $asesor)
                <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
            @endforeach
        </select>
        <br>
        <label for='externo_id'>Asesor Externo</label>
        <select name="asesor_externo" id="externo_id">
 
            @foreach ($externos as $externo)
                <option value="{{$externo->id}}">{{$externo->titulo}} {{$externo->nombre}}</option>
            @endforeach
            <option value="-1">EL ASESOR EXTERNO NO ESTA DADA DE ALTA</option>

        </select>
        <br>

        

        <label for='empresa_id'>Empresa</label>
        <select name="empresa_id" id="empresa_id">
         
            @foreach ($empresas as $empresa)
                <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
            @endforeach
                <option value="-1">LA EMPRESA NO ESTA DADA DE ALTA</option>
        </select>
        <br>

        <label for='periodo_id'>Periodo:</label>
        <input type="hidden" name="periodo_id" value="{{$periodo->id}}">
        {{$periodo->nombre}}
        <br>
        
       
        <input type='submit'>
    </form>
</div>
@endsection