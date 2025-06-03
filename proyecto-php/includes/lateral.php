<?php require_once 'includes/helpers.php'; ?>

<!--Barra Lateral-->
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form method="post" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Entrar">
        </form>
    </div>
    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <form method="post" action="registro.php">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '';?>
            
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" placeholder="Apellido">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : '';?>
            
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '';?>
            
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '';?>

            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores() ?>
    </div>
</aside>