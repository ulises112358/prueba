<?php
    include_once "./components/header.php";
    include_once "./components/menu.php";
?>
    <h2 class="titulo-registrate">Registrate</h2>
    <form class="registrate" action="regusuario.php" method="POST">
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="email" name="correo" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Registrar">
            <input type="reset" value="Limpiar">
        </div>
    </form>
<?php
    include_once "./components/footer.php";
?>