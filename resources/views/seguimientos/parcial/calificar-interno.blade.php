@extends('plantillas.app')
@section('encabezado')
    <a href="{{route('Cambiar_Contraseña')}}">Cambiar la Contraseña</a>
@endsection
@section('contenido')
    <h1>EVALUACION POR EL ASESOR INTERNO</h1>
    <p>Nombre del residente: {{$estudiante->nombre}}</p>
    <p>Nombre del Proyecto: {{$estudiante->proyecto->nombre}}</p>
    <p>Programa educativo: {{$estudiante->carrera->nombre}}</p>
    <p>Periodo de realizacion:</p>
    <p>Calificacion parcial: </p>
    <h2>califiaciones del asesor externo</h2>
    <table border="1">
        <thead>
            <th>Criterios a Evaluar</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>Asiste puntualmente en el horario establecido.</td>
                <td>{{$parcial->puntualidad_externo}}</td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>{{$parcial->equipo_externo}}</td>
            </tr>
            <tr>
                <td>Tiene iniciativa para colaborar.</td>
                <td>{{$parcial->iniciativa_externo}}</td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>{{$parcial->mejoras_externo}}</td>
            </tr>
            <tr>
                <td>Cumple con los objetivos correspondientes al proyecto.</td>
                <td>{{$parcial->objetivos_externo}}</td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>{{$parcial->orden_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra liderazgo en su actuar.</td>
                <td>{{$parcial->liderazgo_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>{{$parcial->conocimiento_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra un comportamiento ético (es disciplinado, acata órdenes, respeta a sus compañeros de trabajo, entre otros).</td>
                <td>{{$parcial->etico_externo}}</td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td>
                    {{$parcial->comentarios_externo}}
                </td>
            </tr>
        </tbody>
    </table>
    <h2>califiaciones del asesor interno</h2>

    <form action="{{route('guardar-seguimientos',[$estudiante->id,$consecutivo])}}" method="post">
        @csrf

    <table border="1">
        <thead>
            <th>Criterios a Evaluar</th>
            <th>Valor</th>
            <th>Evaluacion</th>
        </thead>
        <tbody>
            <tr>
                <td>Asistió puntualmente a las reuniones de asesoría.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="puntualidad_interno" class="rangeInput" id="rangeInput1" min="0" max="10" value="{{$parcial->puntualidad_interno}}"> <br>
                    <span id="rangeValue1">10</span>
                </td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="conocimiento_interno" class="rangeInput" id="rangeInput2" min="0" max="20" value="{{$parcial->conocimiento_interno}}"> <br>
                    <span id="rangeValue2">20</span>
                </td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>15</td>
                <td> 
                    <input type="range" name="equipo_interno" class="rangeInput" id="rangeInput3" min="0" max="15" value="{{$parcial->equipo_interno}}"> <br>
                    <span id="rangeValue3">15</span>

                </td>
            </tr>
            <tr>
                <td>Es dedicado y proactivo en las actividades encomendadas.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="dedicado_interno" class="rangeInput" id="rangeInput4" min="0" max="20" value="{{$parcial->dedicado_interno}}"><br>
                    <span id="rangeValue4">20</span>
                </td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="orden_interno" class="rangeInput" id="rangeInput5" min="0" max="10" value="{{$parcial->orden_interno}}"><br>
                    <span id="rangeValue5">10</span>
                </td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="mejoras_interno" class="rangeInput" id="rangeInput6" min="0" max="15" value="{{$parcial->mejoras_interno}}"><br>
                    <span id="rangeValue6">15</span>
                </td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td colspan="2">
                    <textarea name="comentarios_interno" id="" cols="30" rows="10">{{$parcial->comentarios_interno}}</textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <input type='submit'>
    </form>



    <script>
        // Selecciona todos los inputs de tipo "range" con la clase "rangeInput"
        const rangeInputs = document.querySelectorAll('.rangeInput');

        rangeInputs.forEach(input => {
            const valueDisplay = document.getElementById(`rangeValue${input.id.slice(-1)}`);
            // Actualiza el valor mostrado al cambiar el input
            input.addEventListener('input', function() {
                valueDisplay.textContent = input.value;
            });
            // Muestra el valor inicial al cargar la página
            valueDisplay.textContent = input.value;
        });
    </script>
@endsection
