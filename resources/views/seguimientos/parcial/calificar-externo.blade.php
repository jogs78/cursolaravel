@extends('plantillas.app')
@section('encabezado')
    <a href="{{route('Cambiar_Contraseña')}}">Cambiar la Contraseña</a>
@endsection
@section('contenido')
<h1>EVALUACION POR EL ASESOR EXTERNO</h1>

    <p>Nombre del residente: {{$estudiante->nombre}}</p>
    <p>Nombre del Proyecto: {{$estudiante->proyecto->nombre}}</p>
    <p>Programa educativo: {{$estudiante->carrera->nombre}}</p>
    <p>Periodo de realizacion:</p>
    <p>Calificacion parcial: </p>

    <h2>califiaciones del asesor externo</h2>
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
                <td>Asiste puntualmente en el horario establecido.</td>
                <td>5</td>
                <td> 
                    <input type="range" name="puntualidad_externo" class="rangeInput" id="rangeInput1" min="0" max="5" value="{{$parcial->puntualidad_externo}}"> <br>
                    <span id="rangeValue1">5</span>
                </td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>10</td>
                <td> 
                    <input type="range" name="equipo_externo" class="rangeInput" id="rangeInput2" min="0" max="10" value="{{$parcial->equipo_externo}}"> <br>
                    <span id="rangeValue2">10</span>
                </td>
            </tr>
            <tr>
                <td>Tiene iniciativa para colaborar.</td>
                <td>5</td>
                <td> 
                    <input type="range" name="iniciativa_externo" class="rangeInput" id="rangeInput3" min="0" max="5" value="{{$parcial->iniciativa_externo}}"> <br>
                    <span id="rangeValue3">5</span>

                </td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="mejoras_externo" class="rangeInput" id="rangeInput4" min="0" max="10" value="{{$parcial->mejoras_externo}}"><br>
                    <span id="rangeValue4"></span>
                </td>
            </tr>
            <tr>
                <td>Cumple con los objetivos correspondientes al proyecto.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="objetivos_externo" class="rangeInput" id="rangeInput5" min="0" max="15" value="{{$parcial->objetivos_externo}}"><br>
                    <span id="rangeValue5"></span>
                </td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos establecidos del cronograma.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="orden_externo" class="rangeInput" id="rangeInput6" min="0" max="15" value="{{$parcial->orden_externo}}"><br>
                    <span id="rangeValue6">15</span>
                </td>
            </tr>
            <tr>
                <td>Demuestra liderazgo en su actuar.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="liderazgo_externo" class="rangeInput" id="rangeInput6" min="0" max="10" value="{{$parcial->liderazgo_externo}}"><br>
                    <span id="rangeValue7"></span>
                </td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="conocimiento_externo" class="rangeInput" id="rangeInput6" min="0" max="20" value="{{$parcial->conocimiento_externo}}"><br>
                    <span id="rangeValue8">20</span>
                </td>
            </tr>
            <tr>
                <td>Demuestra un comportamiento ético (es disciplinado, acata órdenes, respeta a sus compañeros de trabajo, entre otros).</td>
                <td>10</td>
                <td> 
                    <input type="range" name="etico_externo" class="rangeInput" id="rangeInput6" min="0" max="10" value="{{$parcial->etico_externo}}"><br>
                    <span id="rangeValue9">10</span>
                </td>
            </tr>


            <tr>
                <td>Observaciones</td>
                <td colspan="2">
                    <textarea name="comentarios_externo" id="" cols="30" rows="10">{{$parcial->comentarios_externo}}</textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <input type='submit'>
    </form>

    <h2>califiaciones del asesor externo</h2>
    <table border="1">
        <thead>
            <th>Criterios a Evaluar</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>Asistió puntualmente a las reuniones de asesoría.</td>
                <td>{{$parcial->puntualidad_interno}}</td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>{{$parcial->conocimiento_interno}}</td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>{{$parcial->equipo_interno}}</td>
            </tr>
            <tr>
                <td>Es dedicado y proactivo en las actividades encomendadas.</td>
                <td>{{$parcial->dedicado_interno}}</td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>{{$parcial->orden_interno}}</td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>{{$parcial->mejoras_interno}}</td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td colspan="2">
                    {{$parcial->comentarios_interno}}
                </td>
            </tr>
        </tbody>
    </table>

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
