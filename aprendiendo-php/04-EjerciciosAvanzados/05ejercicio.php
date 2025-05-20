<!-- Crear un array con el contenido de la siguiente tabla: 
Accion   AVENTURA   DEPORTES
GTA     Assasins    Fifa
COD     Crash       PES
PUBG    Prince      MotoGp

Cada fila debe de ir en un fichero separado.
-->

<?php

    $tabla = [
        "Accion" => ['GTA 5', 'CALL OF DUTY', 'PUBG'],
        "Aventura" => ['Assasins Creed', 'Crash Bandicoot', 'Prince of Persia'],
        "Deportes" => ['Fifa 19', 'PES 19', 'MotoGp 19']
    ];

    $categorias = array_keys($tabla);

?>

<table border="1">
    <?php require_once '05ejercicio/encabezados.php'; ?>
    <?php require_once '05ejercicio/primera.php'; ?>
    <?php require_once '05ejercicio/segunda.php'; ?>
    <?php require_once '05ejercicio/tercera.php'; ?>
</table>