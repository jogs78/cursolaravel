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
            <th>Programa Educativo:  </th> <th class="dato"><!-- Cambiar --></th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Periodo de realización de la Residencia Profesional: </th> <th class="dato"><!-- Cambiar --></th>
        </tr>
    </table>
    <table>
        <tr>
            <th>Calificación Parcial (Promedio de ambas evaluaciones):</th> <th class="dato"><!-- Cambiar --></th>
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
                <th style="width: 70%;" class="cuadro dato">Portada</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Agradecimientos</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Resumen</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Índice</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Introducción</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Problemas a resolver(priorizándolos)</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Justificación</th>
                <th style="width: 15%;" class="cuadro dato">3</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Marco Teórico(fundamentos teóricos)</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Procedimiento, descripción de las actividades realizadas</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Resultados: planos, gráficas, prototipos, manuales, programas, análisis estadísticos, modelos matemáticos, simulaciones, normativas, regulaciones y restricciones, entre otros. Solo para proyectos que lo requieran, estudios de mercado, estudio técnico y estudio económico. **</th>
                <th style="width: 15%;" class="cuadro dato">45</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Conclusiones, recomendaciones, y experiencia profesional adquirida.</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Competencias desarrolladas y/o aplicadas.</th>
                <th style="width: 15%;" class="cuadro dato">3</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Fuentes de información</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%; text-align: right;" class="cuadro">Calificación total</th>
                <th style="width: 15%;" class="cuadro dato">100</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        
    </div>
    <p>Observaciones: </p><p><!-- Cambiar --></p>
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
                <th style="width: 70%;" class="cuadro dato">Portada</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Agradecimientos</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Resumen</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Índice</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Introducción</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Problemas a resolver(priorizándolos)</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Justificación</th>
                <th style="width: 15%;" class="cuadro dato">3</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Marco Teórico(fundamentos teóricos)</th>
                <th style="width: 15%;" class="cuadro dato">10</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Procedimiento, descripción de las actividades realizadas</th>
                <th style="width: 15%;" class="cuadro dato">5</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Resultados: planos, gráficas, prototipos, manuales, programas, análisis estadísticos, modelos matemáticos, simulaciones, normativas, regulaciones y restricciones, entre otros. Solo para proyectos que lo requieran, estudios de mercado, estudio técnico y estudio económico. **</th>
                <th style="width: 15%;" class="cuadro dato">45</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Conclusiones, recomendaciones, y experiencia profesional adquirida.</th>
                <th style="width: 15%;" class="cuadro dato">15</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Competencias desarrolladas y/o aplicadas.</th>
                <th style="width: 15%;" class="cuadro dato">3</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%;" class="cuadro dato">Fuentes de información</th>
                <th style="width: 15%;" class="cuadro dato">2</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 70%; text-align: right;" class="cuadro">Calificación total</th>
                <th style="width: 15%;" class="cuadro dato">100</th>
                <th style="width: 15%;" class="cuadro dato"><!-- Cambiar --></th>
            </tr>
        </table>
        
    </div>
    <p>Observaciones: </p><p><!-- Cambiar --></p>
    <table class="tabla">
        <tr>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Nombre y firma asesor interno</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Sello de la Institución</th>
            <th style="width: 33.33%; height: 30px;  vertical-align: bottom;" class="cuadro dato">Fecha de Evaluación</th>
        </tr>
    </table>
    <p>**Considerar los criterios a evaluar que correspondan a cada programa educativo y de acuerdo a la naturaleza del proyecto</p>
    <table class="tabla">
        <tr>
            <th style="width: 50px;">Nota:</th><th class="dato" style="text-align: left; ">Este formato tiene un valor de 80 puntos de la calificación final.</th>
        </tr>
    </table>
    <p style="margin-left:60px;">Original. - Departamento Académico (entregar 2 Evaluaciónes)</p>
    <p style="margin-left:60px;">Copia. - División de estudios profesionales (entregarla la última evaluación)</p>
    <p style="margin-left:60px;">Copia. - Estudiante</p>
</body>
</html>