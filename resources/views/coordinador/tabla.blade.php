@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
 mostrar la tabla de proyectos
 <table border="1">
  <thead>
   <th>Nombre proyecto</th>
   <th>Nombre asesor</th>
   <th>Nombre empresa</th>
  </thead>
  <tbody>
 @foreach ($proyectos as $proyecto)
   <tr>
    <td>{{$proyecto->nombre}}
    </td>
    
    <td>
      <form action="{{route('coordinadores.asignarAsesor3',$proyecto->id)}}" method="post" style="display:flex " >
        @method('PUT')
        <select name="asesor_id" id="" style="display:flex ">
          @foreach ($asesores as $asesor)
            <option value="{{$asesor->id}}" 
              @if ($proyecto->asesor_id == $asesor->id)
                selected  
              @endif

              >{{$asesor->nombre}}</option>
            
          @endforeach
  
        </select>

        <input type="hidden" name="proyecto_id" value="{{$proyecto->id}}">
        @csrf
        <input type="submit" value="ASIGNAR"  >
      </form>

    </td>

    <td>{{$proyecto->empresa->nombre}}</td>
   </tr>
 @endforeach
</tbody>
</table>

@endsection