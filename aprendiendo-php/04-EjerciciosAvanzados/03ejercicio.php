<!-- Ejercicio 3
Programa que compruebe si una variable esta vacia y si lo esta, rellenarla con texto en minusculas y
mostrarlo en mayusculas y negrita. -->

<?php 

    $variable = "";

    if(empty($variable)){
        $variable = "soy relleno";
    }

    echo strtolower($variable);
    echo "<br/>";
    echo "<strong>" . strtoupper($variable) . "</strong>";
    

?>