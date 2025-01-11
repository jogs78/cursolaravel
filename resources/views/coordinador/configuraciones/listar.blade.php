@extends('plantillas.app')
<style>
.actual {
  font-style: italic;
}

/* Estilo para el efecto hover */
.actual:hover {
  background-color: #e0f7fa; /* Celeste claro */
}

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
<div class="horizontal" style="margin-top:20px;"><p class="subtitulo">Lista de Periodos</p></div>
 <div style="margin-bottom: 40px;">
  <table border="1" >
  <thead>
   <th class="thfondo">ID</th>
   <th class="thfondo">ACTUAL</th>
   <th class="thfondo">NOMBRE</th>
   <th class="thfondo">ACCIONES</th>
  </thead>
  
  <tbody >
  
   @foreach ($periodos as $periodo)     
   <tr @if ($periodo->id == $actual) class="actual"  @endif >
    <td>{{$periodo->id}}</td>
    <td>
      <form action="" method="post"  id="formulario_actual_{{$periodo->id}}">
        <!-- {{route("periodos.update",$periodo->id)}} -->
        @method('PUT')
        @csrf
        <input type="submit" value="ASIGNAR ACTUAL">
      </form>
    </td>
    <td>{{$periodo->nombre}}</td>
    <td>
     <a href="{{route("periodos.edit",$periodo->id)}}">EDITAR</a>, 
     <form action="{{route("periodos.destroy",$periodo->id)}}" method="post">
      @method('DELETE')
      @csrf
      <input type="submit" value="BORRAR">
    </form>

    </td>
   </tr>
   @endforeach  
  </tbody>
 </table>
</div>
 <a href="{{route("periodos.create")}}" class="boton" >Agregar un periodo</a>

@endsection