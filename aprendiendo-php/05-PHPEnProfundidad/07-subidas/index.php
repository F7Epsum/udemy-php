<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos</title>
    </head>
    <body>
        <h1>Subir archivos con php</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>

        </form>
    </body>
</html>