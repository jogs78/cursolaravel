<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
    <style>
        *{font-size: 12px;}
        p {
            line-height: 0.5; /* Puedes ajustar este valor según lo que necesites */
        }
    </style>
</head>
<body>
    <table style="justify-content: center; width: 100%;">
        <thead>
            <th>
                <img src="img/logo.png" style="width: 40px; height: 35px;"/>
            </th>
            <th>
                <p>FORMATO DE EVALUACIÓN Y SEGUIMIENTO DE RESIDENCIA PROFESIONAL</p>
                <p>Guía de llenado de parciales</p>
            </th>
        </thead>
    </table>
    <table>
        <tr>
            <th>Nombre del Residente:</th> <th class="dato">{{$estudiante->nombre}}</th><th class="dato">{{$estudiante->apellido_paterno}}</th><th class="dato"> {{$estudiante->apellido_materno}}</th>
            <th style="padding-left: 50px;">N° de Control:</th> <th class="dato">{{$estudiante->numero_de_control}}</th>
        </tr>
    </table>
    <table>
        <tr>
            <th style=" width: 22%;">Nombre del Proyecto: </th> <th class="dato">{{$estudiante->proyecto->nombre}}</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Programa Educativo:  </th> <th class="dato">{{$estudiante->carrera->nombre}}</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Periodo de realización de la Residencia Profesional: </th> <th class="dato">{{$estudiante->proyecto->periodo->nombre}}</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Calificación Parcial (Promedio de ambas evaluaciones):</th> <th class="dato">{{ ($segundo->promedio_interno + $segundo->promedio_externo )/2 }} </th>
        </tr>
    </table>

    <p>Evaluación por el Asesor Externo:</p>
    <div class="cuadro">
        <table class="tabla">
            <tr>
                <th style="width: 100%;" class="cuadro">En qué medida el residente cumple con lo siguiente:</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro">Criterios a Evaluar</th>
                <th style="width: 15%;" class="cuadro">Valor</th>
                <th style="width: 15%;" class="cuadro">Evaluación</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Asiste puntualmente en el horario establecido.</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->puntualidad_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->equipo_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Tiene iniciativa para colaborar.</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->iniciativa_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Propone mejoras al proyecto.</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->mejoras_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Cumple con los objetivos correspondientes al proyecto.</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->objetivos_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos establecidos del cronograma.</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->orden_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Demuestra liderazgo en su actuar.</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->liderazgo_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Demuestra conocimiento en el área de su especialidad.</th>
                <th style="width: 15%;" class="cuadro dato">20</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->conocimiento_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Demuestra un comportamiento ético (es disciplinado, acata órdenes, respeta a sus compañeros de trabajo, entre otros).</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->etico_externo}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%; text-align: right;" class="cuadro">Calificación total</th>
                <th style="width: 15%;" class="cuadro dato">100</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->promedio_externo}}</th>
            </tr>
        </table>
        
    </div>
    <p>Observaciones: </p><p>{{$segundo->comentarios_externo}}</p>
    <table class="tabla">
        <tr>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Nombre y firma asesor externo</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Sello de la empresa, organismo o dependencia</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Fecha de Evaluación</th>
        </tr>
    </table>
    <p>Evaluación por el Asesor Interno:</p>
    <div class="cuadro">
        <table class="tabla">
            <tr>
                <th style="width: 100%;" class="cuadro">En qué medida el residente cumple con lo siguiente:</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro">Criterios a Evaluar</th>
                <th style="width: 15%;" class="cuadro">Valor</th>
                <th style="width: 15%;" class="cuadro">Evaluación</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Asistió puntualmente a las reuniones de asesoría.</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->puntualidad_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Demuestra conocimiento en el área de su especialidad.</th>
                <th style="width: 15%;" class="cuadro dato">20</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->conocimiento_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->equipo_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Es dedicado y proactivo en las actividades encomendadas.</th>
                <th style="width: 15%;" class="cuadro dato">20</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->dedicado_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos establecidos en el cronograma.</th>
                <th style="width: 15%;" class="cuadro dato">20</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->orden_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Propone mejoras al proyecto.</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->mejoras_interno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%; text-align: right;" class="cuadro">Calificación total</th>
                <th style="width: 15%;" class="cuadro dato">100</th>
                <th style="width: 15%;" class="cuadro dato">{{$segundo->promedio_interno}}</th>
            </tr>
        </table>
    </div>
    <p>Observaciones: </p><p>{{$segundo->comentarios_interno}}</p>
    <table class="tabla">
        <tr>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Nombre y firma asesor interno</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Sello de la Institución</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Fecha de Evaluación</th>
        </tr>
    </table>
    <table class="tabla">
        <tr>
            <th style="width: 50px;">Nota:</th><th class="dato" style="text-align: left; ">Este Formato tiene un valor de 10 puntos de la calificación final.</th>
        </tr>
    </table>
    <p style="margin-left:60px;">Original. - Departamento Académico (entregar 2 Evaluaciónes)</p>
    <p style="margin-left:60px;">Copia. - División de estudios profesionales (entregarla la última evaluación)</p>
    <p style="margin-left:60px;">Copia. - Estudiante</p>
</body>
</html>