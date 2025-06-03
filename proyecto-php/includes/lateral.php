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

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" placeholder="Apellido">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Registrar">
        </form>
    </div>
</aside>