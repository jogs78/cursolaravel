<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
        <table style="justify-content: center; width: 100%;">
        <thead>
            <th>
            <img src="img/logo.png" style="width: 90px; height: 80px;"/>
            </th>
            <th>
            <h3>INSTITUTO TECNOLÓGICO DE TUXTLA GUTIÉRREZ</h3>
            <h3>DIVISIÓN DE ESTUDIOS PROFESIONALES</h3>
            <h3>SOLICITUD DE RESIDENCIA PROFESIONAL</h3>
            </th>
        </thead>
        </table>
        

    <table class="marriba" style="width: 100%;">
            <tr>
                <th style="width: 20%;">Lugar: </th>
                <td style="width: 30%;" class="subrayado">Tuxtla Gutiérrez, Chiapas</th><!--Cambiar-->
                <th style="width: 20%;">Fecha: </th>
                <td style="width: 30%;"  class="subrayado">09 de Agosto del 2024</td>
            </tr>
    </table>
    <table class="marriba" style="width: 100%;">
        <tr>
            <th style="width: 50%;">{{$jefe}}</th>
            <th style="width: 50%;">AT’N: C. MTRA. OBDULIA RIOS COUTIÑO</th>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td class="centro" style="width: 50%;">Jefe de la Div. de Estudios Profesionales</td>
            <td class="centro" style="width: 50%;">Coord. de la Carrera de Ing. En Sistemas Computacionales</td>
        </tr>
    </table>

        <table class="marriba" style="width: 100%;">
            <tr>
            <th class="cuadro" style="width: 25%;">NOMBRE DEL PROYECTO: </th>
            <th style="width: 5%;"></th>
            <td class="cuadro" style="width: 70%;">{{$estudiante->proyecto->nombre}}</td><!--Cambiar-->
            </tr>
        </table>
        <div class="horizontal marriba">
            <p class="bold cuadro marginr">OPCION ELEGIDA: </p>
            <p class="marginr">Banco de Proyecto ( )</p>
            <p class="marginr">Propuesta propia ( )</p>
            <p class="marginr">Trabajador ( )</p> 
        </div>
        <div class="horizontal marriba">
            <p class="bold cuadro marginr">PERIODO PROYECTADO: </p>
            <p class="marginr">AGOSTO – DICIEMBRE 2024</p><!--Cambiar-->
            <p>Número de Residentes: </p>
            <p>1</p><!--Cambiar-->
        </div>
        <div>
            <p class="bold marriba">Datos de la Empresa: </p>
            <table class="tabla">
                <tr>
                    <th style="width: 10%; border: 1px solid black;">Nombre: </th>
                    <th style="width: 90%; border: 1px solid black;" >Tecnológico Nacional de México Campus Tuxtla Gutiérrez</th><!--Cambiar-->
                </tr>
            </table>
                <table class="tabla">
                    <tr>
                        <th class="cuadro" style="width: 20%;">Giro, Ramo o Sector: </th>
                        <th class="cuadro" style="width: 50%;">Industrial (   ) Servicios (   ) Otro  (   )  Público (  x ) Privado (    ) </th><!--Cambiar-->
                        <th class="cuadro" style="width: 40%;">R.F.C. </th>
                        <th class="cuadro" style="width: 30%;">TNM140723GFA </th>
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                        <th style="width: 15%;">Dirección: </th>
                        <th class="cuadro nsemanas">Calle: </th>
                        <th class="cuadro" style="width: 35%;">Carretera Panamericana, Boulevares. KM 1080 </th> <!-- Cambiar -->
                        <th class="cuadro nsemanas">Número: </th>
                        <th class="cuadro" style="width: 30%;">S/N </th> <!-- Cambiar -->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                        <th class="cuadro" style="width: 20%;">Código Postal: </th>
                        <th class="cuadro" style="width: 30%;">29050</th> <!-- Cambiar -->
                        <th class="cuadro" style="width: 20%;">Ciudad/Estado: </th>
                        <th class="cuadro" style="width: 30%;">Tuxtla Gutiérrez, Chiapas  </th> <!-- Cambiar -->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Teléfono / Fax </th>
                    <th class="cuadro" style="width: 40%;">96161500461 </th><!--Cambiar-->
                    <th class="cuadro nsemanas">Email </th>
                    <th class="cuadro" style="width: 40%;">contacto@ittg.edu.mx </th><!--Cambiar-->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Nombre del Titular de la empresa: </th>
                    <th class="cuadro" style="width: 40%;">José Manuel Rosado Pérez</th><!--Cambiar-->
                    <th class="cuadro nsemanas">Puesto: </th>
                    <th class="cuadro" style="width: 40%;">Director del ITTG  </th><!--Cambiar-->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Nombre del Asesor Externo:  </th>
                    <th class="cuadro" style="width: 40%;">Gabriela Alejandra Ríos Zúñiga</th><!--Cambiar-->
                    <th class="cuadro nsemanas">Puesto: </th>
                    <th class="cuadro" style="width: 40%;">Jefa del Departamento de Departamento de Ingenierías</th><!--Cambiar-->
                    </tr>
                </table>

            
        </div>
        <div>
        <p class="bold marriba">Datos del Residente: </p>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Nombre: </th>
                    <th class="cuadro" style="width: 40%;">Jorge Omner Arias Olea</th><!--Cambiar-->
                    <th class="cuadro nsemanas">Telefono: </th>
                    <th class="cuadro" style="width: 40%;">9613599215</th><!--Cambiar-->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Carrera: </th>
                    <th class="cuadro" style="width: 40%;">Ingenieria en Sistemas Computacionales </th><!--Cambiar-->
                    <th class="cuadro nsemanas">No. de Control: </th>
                    <th class="cuadro" style="width: 40%;">20270264</th><!--Cambiar-->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                        <th class="cuadro nsemanas">Direccion:  </th>
                        <th class="cuadro" style="width: 90%;">Blvd. Paseo de las Gargolas Edif. 380 – B</th><!--Cambiar-->
                    </tr>
                </table>
                <table class="tabla">
                    <tr>
                    <th class="cuadro nsemanas">Email: </th>
                    <th class="cuadro" style="width: 40%;">L20270264@tuxtla.tecnm.mx</th><!--Cambiar-->
                    </tr>
                </table>
                    <table class="tabla">
                        <tr>
                        <th class="cuadro nsemanas">Para Seguridad <br>Social Acudir: </th>
                            <th class="cuadro" style="width: 25%;">IMSS <p>(X)</p></th><!--Cambiar-->
                            <th class="cuadro" style="width: 25%;">ISSSTE <p>( )</p></th><!--Cambiar-->
                            <th class="cuadro" style="width: 25%;"> OTROS <p>( )</p></th><!--Cambiar-->
                            <th class="cuadro" style="width: 25%;">No. :  <p>25169967004</p> </th><!--Cambiar-->
                        </tr>
                    </table> 
        </div>

        <div class="centrar">
            <p>______________________</p>
            <p>Firma del alumno</p>
        </div>

   
</body>
</html>