<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .cuerpo{
            grid-template-columns: 20% 80% ;
            display: grid;
            height: 2000px;
        }        
        .menu {
            border: 3px solid rgb(19, 46, 68); border-radius: 10px;
        }
        .contenido {
             margin-left: 10px;
        }
        .cmenor{background-color: rgb(40, 95, 139);}
        .cmayor{background-color: rgb(19, 46, 68);}
        .linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 95%;} 
        .hderecho {display: flex; justify-content: right; }
        .horizontal {display: flex; justify-content: center; width: 100%;}
        .boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; text-decoration: none; cursor: pointer; }
        .boton:hover{background-color: rgb(74, 139, 204);}
        .parrafo{font-size: 25px; margin-top: 10px;}
        .opcion{ background-color: rgb(234, 245, 255); margin-top: 12px; margin-left: 10px; margin-right:10px; padding: 5px;border: 1px solid rgb(19, 46, 68); border-radius: 5px;}
        .opcion:hover{background-color: rgb(255, 255, 255);}
        *{margin: 0; padding: 0;}
    </style>        
</head>
<body>
    @auth
        <div style="width: 100%; margin-bottom:10px;">
            <div class="hderecho" style="width: 100%; height: 20px; margin-bottom:10px; ">
                <div class="cmenor" style="width: 20%;"></div>
                <div class="cmayor" style="width: 80%; "></div>
            </div>
            <div class="hderecho" style="width: 100%; ">
                <div style="width:50%;  margin-top: 15px;">
                    <!-- @yield('encabezado')-->
                    <a class="boton" style="margin-right: 10px; margin-left: 10px; " href="{{route('salida')}}">Salir</a>
                    <a class="boton" href="{{route('Cambiar_Contraseña')}}">Cambiar la Contraseña</a>
                </div>
                <div style="width:50%; margin-right: 10px;" class="hderecho">
                    <p style="margin-right: 10px; margin-bottom: 10px;" class="parrafo">Bienvenido:</p><p class="parrafo">{{Auth::user()->usa->nombre}}</p>
                    <!--<div class="parrafo" style="text-align: right; margin-right: 10px;"><p>Bienvenido:</p>{{Auth::user()->usa->nombre}}</div>-->
                </div>
            </div>
                <div class="horizontal">
                    <div style="margin-top: 10px;" class="linea"></div>
                </div>
            </div>

        <div class="cuerpo">
            <div class="menu">
                @switch(Auth::user()->usa_type)
                    @case("App\Models\Coordinador")
                        <div>
                        <ul>
                            
                            <li class="opcion"><a  style="text-decoration: none;" href="{{route('coordinadores.tabla')}}">CONOCER LA TABLA</a></li>
                           <!-- <li class="opcion"><a  style="text-decoration: none;" href="{{route('coordinadores.asignarAsesor1')}}">ASIGANR ASESORES</a></li>-->
                            <li class="opcion"><a  style="text-decoration: none;" href="#">LISTA DE ESTUDIANTES</a></li>
                            <li class="opcion"><a  style="text-decoration: none;" href="#">GESTIONAR PERIODO</a></li>
                            

                        </ul>
                        </div>
                    @break

                    @case("App\Models\Estudiante")
                    <ul>
                            
                            <li class="opcion"><a style="text-decoration: none;" href="{{route('estudiante.editar')}}">ACTULIALIZA TUS DATOS</a></li>
                            <li class="opcion"><a style="text-decoration: none;" href="{{route('proyecto.crear')}}">PROYECTO</a></li>
                            <li class="opcion"><a style="text-decoration: none;" href="{{route('estudiante.impresiones.solicitud')}}">IMPRIMIR SOLICITUD</a></li>
                            <li class="opcion"><a style="text-decoration: none;" href="{{route('estudiante.impresiones.anteproyecto')}}">IMPRIMIR ANTEPROYECTO</a></li>
                            <!--<li class="opcion"><a style="text-decoration: none;" href="#">CAPTURAS LAS ACTIVIDADES DE TU PROYECTO</a></li>-->
                            <li class="opcion"><a style="text-decoration: none;" href="#">VERIFICA TUS SEGUIMIENTOS</a></li>
                        </ul>
                    @break
                        
                    @case("App\Models\Asesor")
                    <ul>
                            
                            <li class="opcion"><a  style="text-decoration: none;" href="{{route('asesor.listar-proyectos')}}">PROYECTOS ASIGNADOS</a></li>
                            <!-- <li class="opcion"><a  style="text-decoration: none;" href="#">CALIFICAR PROYECTO</a></li> -->
                        </ul>
                    @break

                    @case("App\Models\Externo")
                    <ul>
                            
                            <li class="opcion"><a  style="text-decoration: none;" href="{{route('asesor.listar-proyectos')}}">PROYECTOS ASIGNADOS</a></li>
                            <!-- <li class="opcion"><a  style="text-decoration: none;" href="#">CALIFICAR PROYECTO</a></li> -->
                        </ul>
                    @break

                    @default
                        
                @endswitch
                <!--
                    aqui las opciones son segun el tipo
                -->

            </div>
            <div class="contenido">
                @yield('contenido')
            </div>
        </div>
        
    @endauth
</body>
</html>