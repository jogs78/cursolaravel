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
.parrafo{font-size: 20px;  font-weight: bold; margin-top: 20px;}
.boton{background-color: rgb(25, 118, 210); color: white; border: none; cursor: pointer; margin-top:10px;margin-bottom:10px; margin-left:5px;  margin-right:5px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:20px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; margin-top:20px; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')

<div class="horizontal" style="margin-top:20px;"><p class="subtitulo">Registrar un Asesor Externo</p></div>

<div class="centro"; style="margin-top: 60px; ">
    <form action="{{route("externos.store")}}" method="POST" enctype="application/x-www-form-urlencoded" >
        @csrf
        <label for='nombre' class="parrafo">Nombre/s</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}" class="llenar"><br>

        <label for='apellido_paterno' class="parrafo">Apellido Paterno</label>
        {{$errors->first("apellido_paterno")}}
        <input type='text' name='apellido_paterno' id='apellido_paterno' value="{{old('apellido_paterno')}}" class="llenar"><br>

        <label for='apellido_materno' class="parrafo">Apellido Materno</label>
        {{$errors->first("apellido_materno")}}
        <input type='text' name='apellido_materno' id='apellido_materno' value="{{old('apellido_materno')}}" class="llenar"><br>

        <label for='correo_electronico' class="parrafo">Correo Electronico</label>
        {{$errors->first("correo_electronico")}}
        <input type='email' name='correo_electronico' id='correo_electronico' value="{{old('correo_electronico')}}" class="llenar"><br>

        <label for='profesion' class="parrafo">Profesion</label>
        {{$errors->first("profesion")}}
        <input type='text' name='profesion' id='profesion' value="{{old('profesion')}}" class="llenar"><br>

        <label for='carrera' class="parrafo">Carrera</label>
        {{$errors->first("carrera")}}
        <input type='text' name='carrera' id='carrera' value="{{old('carrera')}}" class="llenar"><br>

        <label for='numero_cedula' class="parrafo">Numero Cedula</label>
        {{$errors->first("numero_cedula")}}
        <input type='text' name='numero_cedula' id='numero_cedula' value="{{old('numero_cedula')}}" class="llenar"><br>


        <input type='submit' class="boton" style="margin-top: 30px;">

    </form>
</div>

    @endsection