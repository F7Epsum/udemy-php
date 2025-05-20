<!-- Ejercicio 4
Crear un script que tenga 4 variables, una de tipo array, otra de string, otra int y otra booblean
que imprima un mensaje segun el tipo de variable -->

<?php

    $matriz = ['hola mundo', '88'];
    $titulo = "master en PHP";
    $numero = 77;
    $boolean = true;

    if(is_array($matriz)){
        echo "El array es un array";
    }

    if(is_string($titulo)){
        echo "$titulo";
    }

    if(is_integer($numero)){
        echo $numero;
    }

    if(is_bool($boolean)){
        echo "El boolean es boolean";
    }


?>