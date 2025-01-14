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
.boton{background-color: rgb(25, 118, 210); color: white; border: none; cursor: pointer; margin-top:10px;margin-bottom:10px; margin-left:5px;  margin-right:5px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:16px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; margin-top:20px; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')
<div class="horizontal" style="margin-top:20px;"><p class="subtitulo">Lista de Estudiantes Registrados</p></div>
    <!--@php
    $todos = $todos ?? [];
    @endphp-->
    <div style="margin-bottom: 40px;">
    <table border="1">
        <thead>
            <th class="thfondo">ID</th>
            <th class="thfondo">NOMBRE</th>
            <th class="thfondo">APELLIDO</th>
            <th class="thfondo">USUARIO</th>
        </thead>
        <tbody>
        @foreach ($todos as $externo)
        <tr>
            <td>{{$externo->id}}</td>
            <td>{{$externo->nombre}}</td>
            <td>
                <a href="{{route("externos.edit",$externo->id)}}">Editar</a>
                <form action="{{route("externos.destroy",$externo->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Borrar">

                </form>
            

            </td>
            <td>
                @if ($externo->usuario->nombre_usuario == 'Sin cuenta')
                    <form action="{{route('externos.crearcuenta',$externo->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <input type="submit" value="Crear Cuenta">
                    </form>
                @else
                    {{$externo->usuario->nombre_usuario}}                
                @endif
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>
    </div>
    <a href="{{route("estudiantes.create")}}" class="boton">Agregar un Estudiante</a>

    <a href="{{route('generar-asesores.excel')}}" class="boton">Descargar lista</a>

    @endsection