<!-- Ejercicio 3
Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo) 
de los 40 primeros numeros naturales.
Utilizar bucle While -->

<?php

/*     $contador = 0;
    while($contador <= 40){
        $cuadrado = $contador * $contador;
        echo "<h3>$cuadrado</h3>";
        $contador++;
    } */

    for($i = 0; $i <= 40; $i++){
        $cuadrado = $i * $i;
        echo "El cuadrado de $i es: $cuadrado<br/>";
    }

?>