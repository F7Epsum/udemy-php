<!-- Ejercicio 1
Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente: 
- Recorrer y mostrar
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento -->

<?php

    //Funciones
    function mostrarArray($numerosEnteros){
        $resultado = "";
        foreach($numerosEnteros as $numero){
            $resultado .= $numero."<br/>";
            }
        return $resultado;
    }

    //Array con numeros enteros
    $numerosEnteros = [5,2,9,8,7,4,1,6];

    //Recorrer y mostrar
    for($i = 0; $i < count($numerosEnteros); $i++){
        echo $numerosEnteros[$i] . "</br>";
    }
    echo "<hr>";

    echo mostrarArray($numerosEnteros);

    echo "<hr>";

    //Ordenar y mostrar
    sort($numerosEnteros);
    echo mostrarArray($numerosEnteros);

    echo "<hr>";
    //Mostrar longitud
    echo count($numerosEnteros);
    echo "<hr>";

    //Buscar elemento
    $buscar = 3;
    if(array_search($buscar, $numerosEnteros)){
        echo "El numero buscado existe en el array";
    } else{
        echo "El numero buscado NO existe en el array";
    }

?>