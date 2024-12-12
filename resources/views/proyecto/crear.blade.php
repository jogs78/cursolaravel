<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
</head>
<body>
    <h2>Proyecto</h2>

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

</body>
</html>