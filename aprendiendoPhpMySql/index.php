<?php
    //Conetar a BBDD
    $conexion = mysqli_connect("localhost","root","","phpmysql");

    if(mysqli_connect_errno()){
        echo "La conexion a la BBDD ha fallado : ". mysqli_connect_error();
    }else{
        echo "Conexion exitosa" . "<br/>";
    }

    //Consulta para configurar la codificacion de caracteres
    mysqli_query($conexion,"SET NAMES 'utf8'");

    //Consulta SELECT
    $query = mysqli_query($conexion, "SELECT * FROM notas");

    while ($nota = mysqli_fetch_assoc($query)) {
        //var_dump($nota);
        echo $nota['id']."<br/>";
        echo $nota['titulo']."<br/>";
        echo $nota['descripcion']."<br/>";
    }


?>