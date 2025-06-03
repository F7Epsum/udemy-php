<?php
session_start();
if(isset($_POST)){
    /* if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }else{
        $nombre = false;
    
    } Esta es otra forma de llamar a la misma funcion que ves arriba...
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;    */

    //Recoger los valores del formulario 
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
    //Array de errores
    $errores = [];

    //Validar datos antes de guardarlo en BBDD
    //Validar nombre
    if(!empty ($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
    }else {
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    
    //Validar apellido
    if(!empty ($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellido_validate = true;
    }else {
        $apellido_validate = false;
        $errores['apellido'] = "El apellido no es valido";
    }

    //Validar email
    if(!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else {
        $email_validate = false;
        $errores['email'] = "El email no es valido";
    }

    //Validar Password
    if(!empty ($password)){
        $password_validate = true;
    }else {
        $password_validate = false;
        $errores['password'] = "La contraseña esta vacia";
    }

    $saveUser = false;
    if(count($errores) == 0){
        $saveUser =true;
        //INSERTAR USUARIO EN BBDD
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');


    }
}

?>