<!-- Ejercicio 2
Escribir un programa que añada valores a un array mientras que su long sea menor 
a 120 y luego mostrarlo por pantalla. 

 -->

 <?php

    $coleccion = [];

    for($i = 0; $i < 120; $i++){
        array_push($coleccion, "elemento-" . $i);
    }

    var_dump($coleccion);



?>