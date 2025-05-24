<!--Ejercicio 2.-->
<!--1. Una funcion-->
<!--2. Validar un mail con filter_var-->
<!--3. Recoger una variable por get y validarla-->
<!--4. Mostrar el resultado.-->

<?php

    function validarEmail($email){
        $status = 'No valido';
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $status = 'Valido';
        }
        return $status;
    }


    if($_GET['email']){
        echo validarEmail($_GET['email']);
    }else{
        echo "Pasa por un get un email";
    }

?>
