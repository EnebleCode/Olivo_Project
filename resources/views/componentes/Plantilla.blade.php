<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield("title","Restaurant Olivo")</title>

    <link rel="stylesheet" href="estilos/plantilla.css">

</head>
<body>
    <a class="ancla" name="ancla"></a>
    <header>
        <img src="imagenes/olivos_sf.png" alt="logo">
        <div class="nav">
            <nav class="menu">
                @yield("menu")
            </nav>
        </div>
    </header>

    <div class="Titulo">
        <hr><h1>Olivos</h1><hr>
    </div>
    <h3 id="Subtitulo">Restaurante Familiar</h3>

    <section class="contenido">
        @yield("Contenido")
    </section>

    <footer>
        <strong>Domicilio:</strong> Ave. México #234, Colonia Centro <br>
        <strong>Telefóno:</strong> 322 345 67 54 <br>
        <strong>Email:</strong> losolivos@gmail.com<br><br>
        <a class="ancla" href="#ancla">Ir al Inicio</a>
    </footer> <!-- FIN FOOTER -->
    
</body>
</html>
