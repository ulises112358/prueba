<?php
    include_once "./components/header.php";
    include_once "./components/menu.php";
?>
    <h2 class="titulo-registrate">Identificate</h2>
    <form class="registrate" action="identificado.php" method="POST">
        <div>
            <label for="correo">Correo</label>
            <input type="email" name="correo" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Ingresar">
        </div>
    </form>
<?php
    include_once "./components/footer.php";
?>