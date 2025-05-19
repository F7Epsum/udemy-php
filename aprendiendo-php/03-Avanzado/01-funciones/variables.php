<!-- Variables locales: 
Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion,
solo disponibles dentro. A no ser que hagamos un return,

Variables globales: Las que se declaraan fuera de una fucnion y
 estan disponibles dentro y fuera de las funciones -->

<?php

    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

    echo $frase;

    function holaMundo(){
        global $frase;
        echo "<h1>$frase</h1>";

        $year = 2019;
        echo "<h1>$year</h1>";

        return $year;
    }

    echo "<h3> Esto es el echo " . holaMundo() . "</h3>";




?>