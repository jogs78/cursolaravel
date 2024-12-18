@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
 lista de periodos
 <table border="1">
  <thead>
   <th>ID</th>
   <th>NOMBRE</th>
   <th>ACCIONES</th>
  </thead>
  <tbody>
   @foreach ($todos as $periodo)     
   <tr>
    <td>{{$periodo->id}}</td>
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
<a href="{{route("periodos.create")}}">agregar un periodo</a>

@endsection