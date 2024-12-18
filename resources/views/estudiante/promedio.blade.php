@extends('plantillas.app')
<style>
.cmenor{background-color: rgb(40, 95, 139);}
.cmayor{background-color: rgb(19, 46, 68);}
.linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 90%;} 
.hderecho {display: flex; justify-content: right; }
.horizontal {display: flex; justify-content: center; width: 100%;}
.centro{display: flex; justify-content: center;}
.subtitulo{text-align:center; font-size: 45px; font-weight: bold;}
.parrafo{font-size: 30px; margin-top:30px;}
.boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; text-decoration: none; cursor: pointer; }
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{height: 25px; font-size: 18px;}
*{margin: 0; padding: 0;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')

<div style="margin-top:20px;">
     <div class="horizontal"><p class="subtitulo">Verifica aqui tus seguimientos</p></div>
    <div class="horizontal" style="margin-top:40px;">
        <a  class="boton" href="{{route('estudiante.impresiones.seguimientos.primer')}}" style="margin-right:80px;">Primer Seguimiento</a>
        <a  class="boton" href="{{route('estudiante.impresiones.seguimientos.segundo')}}">Segundo Seguimiento</a>
        <a  class="boton" href="{{route('estudiante.impresiones.seguimientos.ultimo')}}" style="margin-left:80px;">Ultimo Seguimiento</a>
    </div>
</div>
<!--<p>Seguimiento numero: </p><span></span> <br>
    
    <p>El promedio es de: </p> <span></span>
    <input type="submit">-->
@endsection
