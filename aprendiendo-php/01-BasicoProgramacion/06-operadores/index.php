<?php

    //Operadores aritmeticos
    $num1 = 55;
    $num2 = 33;

    echo "Suma: " . ($num1+$num2) . '<br/>';
    echo "Resta: " . ($num1-$num2) . '<br/>';
    echo "Multiplicacion: " . ($num1*$num2) . '<br/>';
    echo "Division: " . ($num1/$num2) . '<br/>';
    echo "Modulo-Resto: " . ($num1%$num2) . '<br/>';

    //Operadores incremento y decremento
    $year = 2019;
    $year++;
    $year--;

    echo "<h1>$year</h1>";

    //Operadores de asignacion
    
    $age = 55;

    echo $age .'<br/>';
    echo ($age+=5);
    var_dump($age);




?>