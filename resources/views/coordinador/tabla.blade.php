@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
 <h2>mostrar la tabla de proyectos</h2>
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
          <option value="" disabled selected>Elige un asesor...</option>
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
        @if( is_null($proyecto->asesor_id) )
          <input type="submit" value="ASIGNAR.">          
        @else
          <input type="submit" value="CAMBIAR.">          
        @endif
      </form>

    </td>

    <td>{{$proyecto->empresa->nombre}}</td>
   </tr>
 @endforeach
</tbody>
</table>

@endsection