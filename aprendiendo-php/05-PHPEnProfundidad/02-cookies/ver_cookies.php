<!-- Para mostrar el valor de las cookies tengo que usar $_cookie, una variable
superglobal, es un array asociativo. -->

<?php

    if(isset($_COOKIE['micookie'])){
        echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
    } else{
        echo "no existe la cookie";
    }

    if(isset($_COOKIE['unyear'])){
        echo "<h1>" . $_COOKIE['unyear'] . "</h1>";
    } else{
        echo "no existe la cookie";
    }

?>

<a href="crear_cookies.php">Crear mis cookies</a>
<a href="borrar_cookies.php">Borrar mis cookies</a>

