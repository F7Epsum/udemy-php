<!-- Ejercicio 1
Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente: 
- Recorrer y mostrar
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento (que sea buscdo por el parametro GET)
 -->

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
    if(isset($_GET['numero'])){
        $buscar = $_GET['numero'];

        echo "<h1>Buscar en el array el numero $buscar</h1>";
        $search = array_search($buscar,$numerosEnteros);

        if(!empty($search)){
            echo "<h3>El numero buscado existe en el array, en el indice: $search</h3>";
        } else{
            echo "<h3>El numero buscado NO existe en el array</h3>";
        }
    }

?>