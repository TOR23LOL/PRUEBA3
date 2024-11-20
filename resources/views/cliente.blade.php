<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGRESAR CLIENTE</title>
</head>
<body>
    <a href="/informacion"><button>INFORMACIÓN</button></a>
    <a href="/home2"><button type="button">Cerrar Sesión</button></a>
    <form action="/guardar-informacion" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <hr>
        <button type="submit">Guardar Datos</button>
    </form>
</body>
</html>