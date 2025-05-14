<?php

/* FOR 
for(variable contador, condicion, incrementa contador){
    BLOQUE DE INSTRUCCIONES
} */



    $resultado = 0;

    for($i = 0; $i <= 100; $i++){
        //$resultado = $resultado + $i;
        $resultado += $i; 
        echo "$resultado, ";
    }

    echo "<h2>El resultado es: $resultado</h2>";


?>