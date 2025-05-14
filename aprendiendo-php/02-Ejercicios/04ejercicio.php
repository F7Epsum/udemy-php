<!-- Ejercicio 4 - Parametro GET
Recoger dos numeros por la url(parametros GET) y hacer todas las operaciones basicas
de una calculadora (suma, resta, multiplicacion y division) de esos dos numeros. -->

<?php

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        echo 'El numero 1 insertado es: ' . $numero1 . '<br/>';
        echo 'El numero 2 insertado es: ' . $numero2 . '<br/><hr/>';

        echo "Suma: " . ($numero1+$numero2) . "<br/>";
        echo "Resta: " . ($numero1-$numero2) . "<br/>";
        echo "Multiplicacion: " . ($numero1*$numero2) . "<br/>";
        echo "Division: " . ($numero1/$numero2) . "<br/>";
    
    
    }else{
        echo "Inserte corretamente los valores por URL";
    }
    
?>