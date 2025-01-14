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
.parrafo{font-size: 20px;  font-weight: bold;}
.boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; border: none; cursor: pointer; margin-top:30px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:16px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')

<div style="margin-top:20px;">
<div class="horizontal"><p class="subtitulo">Proyecto</p></div>

    <form action="{{route("proyectos.store")}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='nombre' class="parrafo">Nombre/s</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}" class="llenar"><br>

        <label for='objetivo_general' class="parrafo">Objetivo General</label>
        {{$errors->first("objetivo_general")}}
        <input type='text' name='objetivo_general' id='objetivo_general' value="{{old('objetivo_general')}}" class="llenar"><br>

        <label for='lugar' class="parrafo">Lugar</label>
        {{$errors->first("lugar")}}
        <input type='text' name='lugar' id='lugar' value="{{old('lugar')}}" class="llenar"><br>

        <label for='informacion' class="parrafo">Informacion</label>
        {{$errors->first("informacion")}}
        <input type='text' name='informacion' id='informacion' value="{{old('informacion')}}" class="llenar"><br>

        <label for='justificacion' class="parrafo">Justificacion </label>
        {{$errors->first("justificacion")}}
        <textarea name='justificacion' id='justificacion' value="{{old('justificacion')}}" rows="4" ></textarea><br>

        <label for='asesor_id' class="parrafo">Asesor</label>
        <select name="asesor_id" id="asesor_id">
            @foreach ($asesores as $asesor)
                <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
            @endforeach
        </select>
        <br>
        <label for='titulo_ae' class="parrafo">Titulo Asesor Externo</label>
        <input type='text' name='titulo_ae' id='titulo_ae' value="{{old('titulo_ae')}}" class="llenar"><br>
        <br>
        <label for='nombre_ae' class="parrafo">nombre Asesor Externo</label>
        <input type='text' name='nombre_ae' id='nombre_ae' value="{{old('nombre_ae')}}" class="llenar"><br>
        <br>
        <label for='apellido_paterno_ae' class="parrafo">apellido_paterno Asesor Externo</label>
        <input type='text' name='apellido_paterno_ae' id='apellido_paterno_ae' value="{{old('apellido_paterno_ae')}}" class="llenar"><br>
        <br>
        <label for='apellido_materno_ae' class="parrafo">apellido_materno Asesor Externo</label>
        <input type='text' name='apellido_materno_ae' id='apellido_materno_ae' value="{{old('apellido_materno_ae')}}" class="llenar"><br>
        <br>
        <label for='externo' class="parrafo">Asesor Externo</label>
        <input type='text' name='externo' id='externo' value="{{old('externo')}}" class="llenar"><br>
        <br>
        <label for='externo_puesto' class="parrafo">Puesto del Asesor Externo</label>
        <input type='text' name='externo_puesto' id='externo_puesto' value="{{old('externo_puesto')}}" class="llenar"><br>

        
        </select>
        <br>

        

        <label for='empresa_id' class="parrafo">Empresa</label>
        <select name="empresa_id" id="empresa_id">
         
            @foreach ($empresas as $empresa)
                <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
            @endforeach
                <option value="-1">LA EMPRESA NO ESTA DADA DE ALTA</option>
        </select>
        <br>

        <label for='periodo_id' class="parrafo">Periodo:</label>
        <input type="hidden" name="periodo_id" value="{{$periodo->id}}" class="llenar">
        {{$periodo->nombre}}
        <br>
        
       
        <input type='submit' class="boton">
    </form>
</div>
@endsection