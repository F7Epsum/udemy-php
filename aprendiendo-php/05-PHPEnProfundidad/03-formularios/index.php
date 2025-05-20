<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required="required" placeholder="Inserte su nombre"/>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" autofocus="autofocus" pattern="[A-Z ]+"/>

            <input type="submit" value="Enviar"/>
        </form>

    </body>
</html>