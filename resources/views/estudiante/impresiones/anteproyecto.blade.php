<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
        <table style="justify-content: center; width: 100%; margin-top: 0;">
        <thead>
            <th>
            <img src="img/logo.png" style="width: 90px; height: 80px;"/>
            </th>
            <th>
            <h3>INSTITUTO TECNOLÓGICO DE TUXTLA GUTIÉRREZ</h3>
            <h4>ANTEPROYECTO DE RESIDENCIA PROFESIONAL</h4>
            </th>
        </thead>
        </table>
        <p class="centrar" style="margin-top: 0px; padding-top: 0px;">____________________________________________________________________________________________</p>
        
        <table style="width: 100%;">
            <tr>
                <th style="width: 30%;"></th>
                <th style="text-align: right;  font-weight: bold; width: 50%;">NUM. DEL REGISTRO DEL PROYECTO:</th>
                <th style="text-align: right; width: 20%;"> ___________________</th><!--Cambiar-->
            </tr>
        </table>
        <p class="inciso">a) Nombre del proyecto: </p>
        <p>{{$estudiante->proyecto->nombre}}</p>

        <p class="inciso">b) Objetivo del proyecto: </p>
        <p>{{$estudiante->proyecto->objetivo_general}}</p>
        
        <p class="inciso">c) Justificación: </p>
        <p>{{$estudiante->proyecto->justificacion}}</p>

        <p class="inciso">d) Cronograma preliminar de actividades: </p>

        <div class="cuadro">
            <table class="tabla">
                <tr>
                    <th style="width: 15%;"></th>
                    <th  class="cuadro" style="width: 85%; " >Semana </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Actividad</th>
                    <th class="nactividad">1</th>
                    <th class="nactividad">2</th>
                    <th class="nactividad">3</th>
                    <th class="nactividad">4</th>
                    <th class="nactividad">5</th>
                    <th class="nactividad">6</th>
                    <th class="nactividad">7</th>
                    <th class="nactividad">8</th>
                    <th class="nactividad">9</th>
                    <th class="nactividad">10</th>
                    <th class="nactividad">11</th>
                    <th class="nactividad">12</th>
                    <th class="nactividad">13</th>
                    <th class="nactividad">14</th>
                    <th class="nactividad">15</th>
                    <th class="nactividad">16</th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Definir requisitos</th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Maquetación de la interfaz</th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Desarrollo del sistema </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Pruebas al programa</th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Presentación de la web</th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th class="cuadro" style="width: 15%;">Pruebas finales al software implementado </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                    <th class="nactividad"> </th>
                </tr>
            </table>
        </div>
        
        <p class="inciso">e) Descripción detallada de las actividades</p>
        <p class="bold" style="margin-left: 10px;">Definir requisitos:</p>
        <li style="margin-left: 20px; margin-right: 20px;">Analizar y registrar los requisitos funcionales y no funcionales del sistema. </li>
        <li style="margin-left: 20px; margin-right: 20px;">Especificar qué tipo de contenido tendrá el sistema en referencia al texto y elementos multimedia. </li>

        <table class="tabla" style="margin-top: 40px;">
            <tr>
                <th style="width: 50%;"></th>
                <th style="width: 50%;" class="bold">Vto. Bno.</th>
            </tr>
        </table>
        <table class="tabla" style="margin-top: 60px;">
            <tr>
                <th style="width: 50%;">{{$estudiante->nombre}} {{$estudiante->apellido_paterno}} {{$estudiante->apellido_materno}}</th>
                <th style="width: 50%;">Jorge Octavio Guzmán Sánchez</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 50%;">_____________________________</th>
                <th style="width: 50%;">_____________________________</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 50%;">Nombre y firma del Residente</th>
                <th style="width: 50%;">Nombre del Docente Asesor </th>
            </tr>
        </table>
        <table class="tabla" style="margin-top: 40px;">
            <tr>
                <th style="width: 50%;"></th>
                <th style="width: 50%;">Fecha: </th>
            </tr>
        </table>

</body>
</html>