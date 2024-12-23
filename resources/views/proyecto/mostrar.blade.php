@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')

aqui van los datos del proyecto... {{$proyecto->nombre}} y ahora si cargar las actividades

<table border="1">
 <thead>
  <th>Nombre</th>
  <th>Semanas</th>
  <th>Acciones</th>
 </thead>
 <tbody>
  @forelse ($proyecto->actividades as $actividad)
  <tr>
   <th>{{$actividad->nombre}}</th>
   <th>{{$actividad->semanas}}</th>
   <th>Editar Borrar</th>
  </tr>
  @empty
  <tr>
   <th colspan="3">Sin actividades</th>
  </tr>
 @endforelse 
</tbody>    
</table>

<a href="{{route('proyectos.actividades.create', $proyecto->id)}}">AGREGAR UNA ACTIVIDAD</a>

@endsection