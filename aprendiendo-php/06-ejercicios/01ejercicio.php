<!-- Ejercicio 1
Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion de si al parametro get_counter
esta a 1 o 0 -->

<?php


    session_start();

    if(!isset($_SESSION['numero'])){
         $_SESSION['numero'] = 0;
    }

    if(isset($_GET['counter']) && $_GET['counter']== 1){
        $_SESSION['numero']++;
    }

    if(isset($_GET['counter']) && $_GET['counter']== 0){
        $_SESSION['numero']--;
    }

?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>

<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>