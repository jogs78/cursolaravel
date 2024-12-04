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
        <p style="margin-top: 0px; padding-top: 0px;">{{$estudiante->proyecto->nombre}}</p>

        <p class="inciso">b) Objetivo del proyecto: </p>
        <p style="margin-top: 0px; padding-top: 0px;">{{$estudiante->proyecto->objetivo_general}}</p>
        
        <p class="inciso">c) Justificación: </p>
        <p style="margin-top: 0; padding-top: 0;">{{$estudiante->proyecto->justificacion}}</p>

        <p class="inciso">d) Cronograma preliminar de actividades: </p>
            <table class="tabla">
                <tr>
                    <th style="width: 15%;"></th>
                    <th style="width: 85%; border: 1px solid black;" >Semana </th>
                </tr>
            </table>
            <table class="tabla">
                <tr>
                    <th style="width: 15%;">Actividad</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >1</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >2</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >3</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >4</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >5</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >6</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >7</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >8</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >9</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >10</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >11</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >12</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >13</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >14</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >15</th>
                    <th style="width: 5.3125%; border: 1px solid black;" >16</th>
                </tr>
            </table>
</body>
</html>