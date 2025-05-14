<!-- Ejercicio 5
Hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la URL($_GET) -->

<?php

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i <= $numero2; $i++){
            echo 'Numero entre ' . $i . '<br/>';
            }
        }else{
            echo 'Numero 1 debe de ser mayor que numero 2';
        }

    }else{
        echo "Ingrese correctamente los numeros en la URL";
    }


?>