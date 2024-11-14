<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="horizontal" style="margin-top: 1%;">
        <div class="logo">
            <img src="img/logo.png" width="200" title="logo" alt="logo" style="width: 90px; height: 80px;"/>
            
        </div>
        <div class="titulo">
            <h3>INSTITUTO TECNOLÓGICO DE TUXTLA GUTIÉRREZ </h3>
            <h3>DIVISIÓN DE ESTUDIOS PROFESIONALES</h3>
            <h3>SOLICITUD DE RESIDENCIA PROFESIONAL</h3>
        </div>
    </div>
<div class="margen">
    <div>
        <div class="horizontal marriba">
            <div class="horizontal">
            <p class="marginr">Lugar: </p>
            <p class="subrayado">Tuxtla Gutiérrez, Chiapas</p><!--Cambiar-->
            </div>
            <div class="horizontal">
            <p class="marginr">Fecha: </p>
            <p class="subrayado">09 de Agosto del 2024</p><!--Cambiar-->
            </div>
        </div>
        <div class="horizontal marriba">
            <div class="medioa">
            <p>{{$jefe}}</p> <!--Cambiar-->
            <p>Jefe de la Div. de Estudios Profesionales</p>
            </div>
            <div class="medioa">
            <p>AT’N: C. MTRA. OBDULIA RIOS COUTIÑO</p><!--Cambiar-->
            <p>Coord. de la Carrera de Ing. En Sistemas Computacionales </p>
            </div>
        </div>
    </div>
        <div class="horizontal marriba">
            <p class="bold cuadro marginr">NOMBRE DEL PROYECTO: </p>
            <p>{{$estudiante->proyecto->nombre}}</p><!--Cambiar-->
        </div>
        <div class="horizontal marriba">
            <p class="bold cuadro marginr">OPCION ELEGIDA: </p>
            <p class="marginr">Banco de Proyecto</p>
            <p class="marginr">Propuesta propia</p>
            <p class="marginr">Trabajador</p>
        </div>
        <div class="horizontal marriba">
            <p class="bold cuadro marginr">PERIODO PROYECTADO: </p>
            <p class="marginr">AGOSTO – DICIEMBRE 2024</p><!--Cambiar-->
            <p>Número de Residentes: </p>
            <p>1</p><!--Cambiar-->
        </div>
        <div>
            <p class="bold marriba">Datos de la Empresa: </p>
            <div class="tabla">
                <div class="contenido">
                    <p class="cuadro nsemanas">Nombre: </p>
                    <p class="cuadro" style="width: 90%;">Tecnológico Nacional de México Campus Tuxtla Gutiérrez</p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Giro, Ramo o Sector: </p>
                    <p class="cuadro" style="width: 50%;">Industrial (   ) Servicios (   ) Otro  (   )  Público (  x ) Privado (    ) </p><!--Cambiar-->
                    <p class="cuadro nsemanas">R.F.C. </p>
                    <p class="cuadro" style="width: 30%;">TNM140723GFA </p>
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Dirección: </p>
                    <div style="width: 90%;">
                        <div class="contenido">
                            <div class="cuadro contenido" style="width: 50%;"> <p class="bold">Calle:</p> <p> Carretera Panamericana, Boulevares. KM 1080 </p> <!--Cambiar--></div>
                            <div class="cuadro contenido" style="width: 50%;"> <p class="bold">Número:</p> <p> S/N</p> <!--Cambiar--></div>
                        </div>
                        <div class="contenido">
                            <div class="cuadro contenido" style="width: 50%;"> <p class="bold">Código postal:</p> <p>29050</p> <!--Cambiar--></div>
                            <div class="cuadro contenido" style="width: 50%;"> <p class="bold">Ciudad/Estado:</p> <p>Tuxtla Gutiérrez, Chiapas</p> <!--Cambiar--></div>
                        </div>
                    </div>
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Teléfono / Fax </p>
                    <p class="cuadro" style="width: 40%;">96161500461 </p><!--Cambiar-->
                    <p class="cuadro nsemanas">Email </p>
                    <p class="cuadro" style="width: 40%;">contacto@ittg.edu.mx </p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Nombre del Titular de la empresa: </p>
                    <p class="cuadro" style="width: 40%;">José Manuel Rosado Pérez</p><!--Cambiar-->
                    <p class="cuadro nsemanas">Puesto: </p>
                    <p class="cuadro" style="width: 40%;">Director del ITTG  </p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Nombre del Asesor Externo:  </p>
                    <p class="cuadro" style="width: 40%;">Gabriela Alejandra Ríos Zúñiga</p><!--Cambiar-->
                    <p class="cuadro nsemanas">Puesto: </p>
                    <p class="cuadro" style="width: 40%;">Jefa del Departamento de Departamento de Ingenierías</p><!--Cambiar-->
                </div>

            </div>
        </div>
        <br>
        <p class="bold">Datos del Residente: </p>
            <div class="tabla">
                <div class="contenido">
                    <p class="cuadro nsemanas">Nombre: </p>
                    <p class="cuadro" style="width: 40%;">Jorge Omner Arias Olea</p><!--Cambiar-->
                    <p class="cuadro nsemanas">Telefono: </p>
                    <p class="cuadro" style="width: 40%;">9613599215</p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Carrera: </p>
                    <p class="cuadro" style="width: 40%;">Ingenieria en Sistemas Computacionales </p><!--Cambiar-->
                    <p class="cuadro nsemanas">No. de Control: </p>
                    <p class="cuadro" style="width: 40%;">20270264</p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Direccion:  </p>
                    <p class="cuadro" style="width: 90%;">Blvd. Paseo de las Gargolas Edif. 380 – B</p><!--Cambiar-->
                </div>
                <div class="contenido">
                    <p class="cuadro nsemanas">Email: </p>
                    <p class="cuadro" style="width: 40%;">L20270264@tuxtla.tecnm.mx</p><!--Cambiar-->
                    <p class="cuadro nsemanas">Para Seguridad <br>Social Acudir: </p>
                    <div style="width: 40%;">
                        <div class="contenido">
                            <p class="cuadro" style="width: 33%;">IMSS (x)</p><!--Cambiar-->
                            <p class="cuadro" style="width: 33%;">ISSSTE ( )</p><!--Cambiar-->
                            <p class="cuadro" style="width: 33%;"> OTROS( )</p><!--Cambiar-->
                        </div>
                        <p class="cuadro" >No. :  25169967004 </p><!--Cambiar-->

                    </div>
                </div>

            </div>
        </div>

        <div class="centrar">
            <p>______________________</p>
            <p>Firma del alumno</p>
        </div>
</div>
   
</body>
</html>