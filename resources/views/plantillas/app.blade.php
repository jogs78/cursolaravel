<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .encabezado {
            background-color: rgb(145, 202, 221);
            display: block;
            height: 100px;
        }
        .cuerpo{
            grid-template-columns: 20% 80% ;
            display: grid;
            height: 2000px;
        }        
        .menu {
            background-color: rgb(230, 173, 187);
        }
        .contenido {
            background-color: rgb(173, 230, 199);
        }
    </style>        
</head>
<body>
    @auth
        <div class="encabezado">
            @yield('encabezado')
            <a href="{{route('Cambiar_Contraseña')}}">Cambiar la Contraseña</a>
            <a href="{{route('salida')}}">Salir</a>

        </div>
        <div class="cuerpo">
            <div class="menu">
                @switch(Auth::user()->usa_type)
                    @case("App\Models\Coordinador")
                        <ul>
                            
                            <li><a href="{{route('coordinadores.tabla')}}">CONOCER LA TABLA</a></li>
                            <li><a href="{{route('coordinadores.asignarAsesor1')}}">ASIGANR ASESORES</a></li>
                            <li></li>

                        </ul>
                    @break

                    @case("App\Models\Estudiante")
                        opciones del Estudiante
                    @break
                        
                    @case("App\Models\Asesor")
                        opciones del Asesor
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