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
    </td>

    <td>
    {{$proyecto->estudiantes->nombre}}
    </td>
   </tr>
 @endforeach
</tbody>
</table>
@endsection