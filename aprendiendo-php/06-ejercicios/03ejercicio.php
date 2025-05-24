<!--Ejercicio 3.-->
<!--Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones.-->
<!--Uno para sumar, restar, dividir y multiplicar.-->
<!--Mostrar resultado por pantalla.-->

<?php

$resultado = false;
if(isset($_POST['num1']) && isset($_POST['num2'])){

        if(isset($_POST['sumar'])){
            $resultado = "El resultado es: " . ($_POST['num1'] + $_POST['num2']);
        }

        if(isset($_POST['restar'])){
            $resultado = "El resultado es: " . ($_POST['num1'] - $_POST['num2']);
        }

        if(isset($_POST['multiplicar'])){
            $resultado = "El resultado es: " . ($_POST['num1'] * $_POST['num2']);
        }

        if(isset($_POST['dividir'])){
            $resultado = "El resultado es: " . ($_POST['num1'] / $_POST['num2']);
        }

    }

?>


<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="post">
            <label for="num1">Inserte num1 a calcular</label>
            <input type="number" name="num1" required/> <br/>

            <label for="num2">Inserte num2 a calcular</label>
            <input type="number" name="num2" required/><br/>

            <input type="submit" value="Sumar" name="sumar"/>
            <input type="submit" value="Restar" name="restar"/>
            <input type="submit" value="Multiplicar" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir"/>

            <?php
                if ($resultado != false):
                    echo "<h2>$resultado</h2>";
                endif
            ?>

        </form>
    </body>
</html>