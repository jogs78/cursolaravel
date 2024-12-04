@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
  
  <p>Lista de Proyectos Asignados</p>
  <table border="1">
  <thead>
   <th>Nombre proyecto</th>
   <th>Nombre empresa</th>
   <th>Nombre Estudiante</th>
  </thead>
  <tbody>
 @foreach ($proyectos as $proyecto)
   <tr>
    <td>
    {{$proyecto->nombre}}
    </td>
    
    <td>
    {{$proyecto->empresa->nombre}}
    <br>
    {{$proyecto->periodo_id}}
    </td>

    <td>
      @foreach ($proyecto->estudiantes as $estudiante)
          <li>{{$estudiante->nombre}}</li>
      @endforeach
    </td>
   </tr>
 @endforeach
</tbody>
</table>
@endsection