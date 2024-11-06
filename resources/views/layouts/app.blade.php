<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-description','Default meta description')"/>
    <title>@yield('title')</title>
    <!-- Aquí puedes incluir tus enlaces CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilos para el rectángulo */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .rectangulo-azul {
            width: 200px;      /* Ancho del rectángulo */
            height: 100px;     /* Altura del rectángulo */
            background-color: blue; /* Color de fondo */
            position: absolute; /* Ubicación en la esquina superior izquierda */
            top: 0;
            left: 0;
        }
        .rectangulo-rojo {
            width: 200px;      /* Ancho del rectángulo */
            height: 100px;     /* Altura del rectángulo */
            background-color: red; /* Color de fondo */
        }
    </style>
</head>
<body>
    <header>
        @yield('header')
        <div class ="rectangulo-azul"></div>
    </header>

    <main>
        @yield('content')
        <br>
    </main>

    <footer>
        @yield('footer')
        <div class ="rectangulo-rojo"></div>
    </footer>

</body>
</html>